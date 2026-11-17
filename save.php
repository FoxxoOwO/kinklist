<?php

declare(strict_types=1);

require_once __DIR__ . '/condb.php';
require_once __DIR__ . '/helpers.php';

ensureSession();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /', true, 303);
    exit;
}

if (!verifyCsrfToken($_POST['csrf_token'] ?? null)) {
    setFlash('error', 'Invalid form session. Please try again.');
    header('Location: /', true, 303);
    exit;
}

$pdo = getDb();

$rawBasic = is_array($_POST['basic_info'] ?? null) ? $_POST['basic_info'] : [];
$rawPrefs = is_array($_POST['preferences'] ?? null) ? $_POST['preferences'] : [];
$urlMode = ($_POST['url_mode'] ?? 'random') === 'custom' ? 'custom' : 'random';
$customSlug = trim((string) ($_POST['custom_slug'] ?? ''));
$password = (string) ($_POST['edit_password'] ?? '');

$basicInfo = sanitizeBasicInfo($rawBasic);
$preferences = sanitizePreferences($rawPrefs);

$rememberOldInput = static function () use ($basicInfo, $preferences, $urlMode, $customSlug): void {
    $_SESSION['old_input'] = [
        'basic_info'  => $basicInfo,
        'preferences' => $preferences,
        'url_mode'    => $urlMode,
        'custom_slug' => $customSlug,
    ];
};

if ($password === '') {
    $rememberOldInput();
    setFlash('error', 'Please enter an edit password.');
    header('Location: /', true, 303);
    exit;
}

if ($urlMode === 'custom') {
    if (!isValidSlug($customSlug)) {
        $rememberOldInput();
        setFlash('error', 'Custom link must be 2–64 characters and contain only letters, numbers, and hyphens.');
        header('Location: /', true, 303);
        exit;
    }
    if (isReservedSlug($customSlug)) {
        $rememberOldInput();
        setFlash('error', 'This link name is reserved. Please choose another one.');
        header('Location: /', true, 303);
        exit;
    }
    if (slugExists($pdo, $customSlug)) {
        $rememberOldInput();
        setFlash('error', 'This link is already taken. Please choose another one.');
        header('Location: /', true, 303);
        exit;
    }
    $slug = $customSlug;
} else {
    $slug = generateUniqueSlug($pdo);
}

$stmt = $pdo->prepare(<<<'SQL'
    INSERT INTO lists (slug, password_hash, basic_info, preferences)
    VALUES (:slug, :password_hash, :basic_info, :preferences)
SQL);

$stmt->execute([
    ':slug'          => $slug,
    ':password_hash' => password_hash($password, PASSWORD_DEFAULT),
    ':basic_info'    => json_encode($basicInfo, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR),
    ':preferences'   => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR),
]);

setFlash('success', 'Your KinkyMe list has been saved!');
header('Location: /' . rawurlencode($slug), true, 303);
exit;
