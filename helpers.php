<?php

declare(strict_types=1);

require_once __DIR__ . '/kinks.php';

function ensureSession(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_set_cookie_params([
            'httponly' => true,
            'samesite' => 'Lax',
            'secure'   => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        ]);
        session_start();
    }
}

function e(string|int|float|null $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function getCsrfToken(): string
{
    ensureSession();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCsrfToken(?string $token): bool
{
    ensureSession();
    if (empty($_SESSION['csrf_token']) || !is_string($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

function setFlash(string $type, string $message): void
{
    ensureSession();
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

/**
 * @return array{type: string, message: string}|null
 */
function consumeFlash(): ?array
{
    ensureSession();
    if (!isset($_SESSION['flash']) || !is_array($_SESSION['flash'])) {
        return null;
    }
    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $flash;
}

function isValidSlug(string $slug): bool
{
    return (bool) preg_match('/^[a-zA-Z0-9-]{2,64}$/', $slug);
}

function isReservedSlug(string $slug): bool
{
    $reserved = [
        'index', 'save', 'view', 'edit', 'export', 'condb', 'header', 'footer',
        'body', 'kinks', 'helpers', 'css', 'js', 'data', 'assets', 'api', 'admin',
    ];
    return in_array(strtolower($slug), $reserved, true);
}

function slugExists(PDO $pdo, string $slug, ?int $excludeId = null): bool
{
    if ($excludeId !== null) {
        $stmt = $pdo->prepare('SELECT 1 FROM lists WHERE slug = :slug AND id != :id LIMIT 1');
        $stmt->execute([':slug' => $slug, ':id' => $excludeId]);
    } else {
        $stmt = $pdo->prepare('SELECT 1 FROM lists WHERE slug = :slug LIMIT 1');
        $stmt->execute([':slug' => $slug]);
    }
    return (bool) $stmt->fetchColumn();
}

function generateUniqueSlug(PDO $pdo): string
{
    $alphabet = 'abcdefghjkmnpqrstuvwxyz23456789';
    $maxIndex = strlen($alphabet) - 1;

    for ($attempt = 0; $attempt < 20; $attempt++) {
        $slug = '';
        for ($i = 0; $i < 8; $i++) {
            $slug .= $alphabet[random_int(0, $maxIndex)];
        }
        if (!isReservedSlug($slug) && !slugExists($pdo, $slug)) {
            return $slug;
        }
    }

    return bin2hex(random_bytes(6));
}

/**
 * @return array<string, mixed>|null
 */
function findListBySlug(PDO $pdo, string $slug): ?array
{
    $stmt = $pdo->prepare('SELECT * FROM lists WHERE slug = :slug LIMIT 1');
    $stmt->execute([':slug' => $slug]);
    $row = $stmt->fetch();
    if (!$row) {
        return null;
    }

    $row['basic_info'] = json_decode((string) $row['basic_info'], true) ?: [];
    $row['preferences'] = json_decode((string) $row['preferences'], true) ?: [];
    return $row;
}

/**
 * Validates and normalizes basic_info from POST data.
 *
 * @param array<string, mixed> $raw
 * @return array<string, string>
 */
function sanitizeBasicInfo(array $raw): array
{
    $options = getBasicInfoOptions();

    $nickname = trim((string) ($raw['nickname'] ?? ''));
    if (mb_strlen($nickname) > 100) {
        $nickname = mb_substr($nickname, 0, 100);
    }

    $ageRaw = trim((string) ($raw['age'] ?? ''));
    $age = '';
    if ($ageRaw !== '' && ctype_digit($ageRaw)) {
        $ageNum = (int) $ageRaw;
        if ($ageNum >= 18 && $ageNum <= 120) {
            $age = (string) $ageNum;
        }
    }

    $notes = trim((string) ($raw['notes'] ?? ''));
    if (mb_strlen($notes) > 2000) {
        $notes = mb_substr($notes, 0, 2000);
    }

    $pickOption = static function (string $field, string $default) use ($raw, $options): string {
        $val = (string) ($raw[$field] ?? $default);
        return array_key_exists($val, $options[$field]) ? $val : $default;
    };

    return [
        'nickname'    => $nickname,
        'age'         => $age,
        'gender'      => $pickOption('gender', ''),
        'genitals'    => $pickOption('genitals', ''),
        'boob_size'   => $pickOption('boob_size', 'none'),
        'orientation' => $pickOption('orientation', ''),
        'body_count'  => $pickOption('body_count', 'none'),
        'notes'       => $notes,
    ];
}

/**
 * Validates and normalizes preferences against known sections/items/ratings.
 *
 * @param array<string, mixed> $raw
 * @return array<string, mixed>
 */
function sanitizePreferences(array $raw): array
{
    $ratings = getRatings();
    $clean = [];

    $normalizeEntry = static function ($entry) use ($ratings): array {
        $tried = !empty($entry['tried']);
        $rating = (string) ($entry['rating'] ?? 'not_entered');
        if (!array_key_exists($rating, $ratings)) {
            $rating = 'not_entered';
        }
        return ['tried' => $tried, 'rating' => $rating];
    };

    foreach (getKinkSections() as $sectionKey => $section) {
        $sectionRaw = is_array($raw[$sectionKey] ?? null) ? $raw[$sectionKey] : [];
        foreach ($section['items'] as $label) {
            $itemKey = slugifyKinkKey($label);
            $itemRaw = is_array($sectionRaw[$itemKey] ?? null) ? $sectionRaw[$itemKey] : [];

            if ($section['columns'] === null) {
                $clean[$sectionKey][$itemKey] = $normalizeEntry($itemRaw);
            } else {
                foreach (array_keys($section['columns']) as $colKey) {
                    $colRaw = is_array($itemRaw[$colKey] ?? null) ? $itemRaw[$colKey] : [];
                    $clean[$sectionKey][$itemKey][$colKey] = $normalizeEntry($colRaw);
                }
            }
        }
    }

    return $clean;
}

function getBaseHostPrefix(): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $host . '/';
}
