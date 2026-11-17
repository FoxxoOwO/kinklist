<?php

declare(strict_types=1);

require_once __DIR__ . '/condb.php';
require_once __DIR__ . '/helpers.php';

$slug = trim((string) ($_GET['slug'] ?? ''));
$pdo = getDb();
$list = $slug !== '' ? findListBySlug($pdo, $slug) : null;

if ($list === null) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=utf-8');
    echo "List not found.\n";
    exit;
}

$format = strtolower(trim((string) ($_GET['format'] ?? 'json')));
$safeSlug = preg_replace('/[^a-zA-Z0-9_-]/', '_', (string) $list['slug']) ?: 'list';

$basicInfo = is_array($list['basic_info']) ? $list['basic_info'] : [];
$preferences = is_array($list['preferences']) ? $list['preferences'] : [];
$ratings = getRatings();
$infoOptions = getBasicInfoOptions();
$sections = getKinkSections();

/**
 * Formats basic_info fields with human-readable labels, keeping only non-empty values.
 *
 * @return array<string, string>
 */
function buildReadableInfo(array $basicInfo, array $infoOptions): array
{
    $out = [];
    $nickname = trim((string) ($basicInfo['nickname'] ?? ''));
    if ($nickname !== '') {
        $out['Name'] = $nickname;
    }
    if (!empty($basicInfo['age'])) {
        $out['Age'] = (string) $basicInfo['age'];
    }
    $labeled = [
        'gender'      => 'Gender',
        'genitals'    => 'Genitals',
        'boob_size'   => 'Boob size',
        'orientation' => 'Orientation',
        'body_count'  => 'Body count',
    ];
    foreach ($labeled as $key => $title) {
        $val = (string) ($basicInfo[$key] ?? '');
        if ($val !== '' && $val !== 'none' && isset($infoOptions[$key][$val])) {
            $out[$title] = $infoOptions[$key][$val];
        }
    }
    $notes = trim((string) ($basicInfo['notes'] ?? ''));
    if ($notes !== '') {
        $out['Notes'] = $notes;
    }
    return $out;
}

header('X-Content-Type-Options: nosniff');

if ($format === 'md' || $format === 'txt') {
    $ext = $format === 'md' ? 'md' : 'txt';
    $mime = $format === 'md' ? 'text/markdown' : 'text/plain';
    header('Content-Type: ' . $mime . '; charset=utf-8');
    header('Content-Disposition: attachment; filename="kinkyme-' . $safeSlug . '.' . $ext . '"');

    $readableInfo = buildReadableInfo($basicInfo, $infoOptions);
    $titleName = $readableInfo['Name'] ?? ('/' . $list['slug']);

    $lines = [];
    $lines[] = '# KinkyMe — ' . $titleName;
    $lines[] = 'Link: /' . $list['slug'];
    $lines[] = '';

    if (!empty($readableInfo)) {
        $lines[] = '## Info';
        foreach ($readableInfo as $k => $v) {
            if ($k === 'Notes') {
                $lines[] = '- **Notes**: ' . str_replace(["\r\n", "\r", "\n"], ' / ', $v);
            } else {
                $lines[] = '- **' . $k . '**: ' . $v;
            }
        }
        $lines[] = '';
    }

    $lines[] = '## Preferences';
    $anyPreference = false;

    foreach ($sections as $sectionKey => $section) {
        $sectionLines = [];
        foreach ($section['items'] as $itemLabel) {
            $itemKey = slugifyKinkKey($itemLabel);
            $savedItem = $preferences[$sectionKey][$itemKey] ?? [];

            if ($section['columns'] === null) {
                $tried = !empty($savedItem['tried']);
                $ratingKey = (string) ($savedItem['rating'] ?? 'not_entered');
                if (!isset($ratings[$ratingKey])) {
                    $ratingKey = 'not_entered';
                }
                if ($ratingKey !== 'not_entered' || $tried) {
                    $triedTag = $tried ? ' [Tried]' : '';
                    $sectionLines[] = '- ' . $itemLabel . ': ' . $ratings[$ratingKey]['label'] . $triedTag;
                }
            } else {
                $parts = [];
                foreach ($section['columns'] as $colKey => $colLabel) {
                    $colData = is_array($savedItem[$colKey] ?? null) ? $savedItem[$colKey] : [];
                    $tried = !empty($colData['tried']);
                    $ratingKey = (string) ($colData['rating'] ?? 'not_entered');
                    if (!isset($ratings[$ratingKey])) {
                        $ratingKey = 'not_entered';
                    }
                    if ($ratingKey !== 'not_entered' || $tried) {
                        $triedTag = $tried ? ' [Tried]' : '';
                        $parts[] = $colLabel . ': ' . $ratings[$ratingKey]['label'] . $triedTag;
                    }
                }
                if (!empty($parts)) {
                    $sectionLines[] = '- ' . $itemLabel . ' (' . implode(', ', $parts) . ')';
                }
            }
        }

        if (!empty($sectionLines)) {
            $anyPreference = true;
            $lines[] = '';
            $lines[] = '### ' . $section['title'];
            foreach ($sectionLines as $sLine) {
                $lines[] = $sLine;
            }
        }
    }

    if (!$anyPreference) {
        $lines[] = '_No preferences entered yet._';
    }

    echo implode("\n", $lines) . "\n";
    exit;
}

// Default: JSON export
header('Content-Type: application/json; charset=utf-8');
header('Content-Disposition: attachment; filename="kinkyme-' . $safeSlug . '.json"');

$payload = [
    'app'         => 'KinkyMe',
    'slug'        => $list['slug'],
    'exported_at' => gmdate('c'),
    'created_at'  => $list['created_at'] ?? null,
    'updated_at'  => $list['updated_at'] ?? null,
    'basic_info'  => $basicInfo,
    'preferences' => $preferences,
];

echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) . "\n";
