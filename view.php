<?php

declare(strict_types=1);

require_once __DIR__ . '/condb.php';
require_once __DIR__ . '/helpers.php';

$slug = trim((string) ($_GET['slug'] ?? ''));
$pdo = getDb();
$list = $slug !== '' ? findListBySlug($pdo, $slug) : null;

if ($list === null) {
    http_response_code(404);
    $pageTitle = 'KinkyMe — Not found';
    $showLegend = false;
    require_once __DIR__ . '/header.php';
    ?>
    <section class="form-section empty-state">
        <h2>List not found</h2>
        <p>The KinkyMe list at <code>/<?= e($slug) ?></code> does not exist or may have been moved to a different link.</p>
        <a href="/" class="submit-button btn-inline">Create a new KinkyMe list</a>
    </section>
    <?php
    require_once __DIR__ . '/footer.php';
    exit;
}

$basicInfo = $list['basic_info'];
$preferences = $list['preferences'];
$ratings = getRatings();
$infoOptions = getBasicInfoOptions();
$sections = getKinkSections();

$nickname = trim((string) ($basicInfo['nickname'] ?? ''));
$pageTitle = ($nickname !== '' ? $nickname . ' — ' : '') . 'KinkyMe';

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$shareUrl = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/' . rawurlencode((string) $list['slug']);
$editUrl = '/' . rawurlencode((string) $list['slug']) . '/edit';
$exportBaseUrl = '/' . rawurlencode((string) $list['slug']) . '/export';

$headerActionsHtml = '<button type="button" id="copy-share-url" class="btn-secondary" data-url="' . e($shareUrl) . '">Copy link</button>'
    . '<details class="export-menu">'
    . '<summary class="btn-secondary">Export ▾</summary>'
    . '<div class="export-menu-list">'
    . '<button type="button" id="export-png-btn" class="export-menu-item">Download PNG image</button>'
    . '<a href="' . e($exportBaseUrl . '?format=json') . '" class="export-menu-item">Download JSON</a>'
    . '<a href="' . e($exportBaseUrl . '?format=md') . '" class="export-menu-item">Download Markdown</a>'
    . '<button type="button" onclick="window.print()" class="export-menu-item">Print / Save PDF</button>'
    . '</div>'
    . '</details>'
    . '<a href="' . e($editUrl) . '" class="btn-primary">Edit</a>'
    . '<a href="/" class="btn-secondary">New list</a>';

function renderReadOnlyCell(bool $tried, string $selectedRating, array $ratings): void
{
    echo '<div class="choice-cell choice-cell-readonly">';
    echo '<span class="choice-dot-checkbox" title="' . ($tried ? 'Tried' : 'Not tried') . '">';
    echo '<input type="checkbox"' . ($tried ? ' checked' : '') . ' disabled tabindex="-1" aria-hidden="true">';
    echo '<span class="dot checkbox-visual"></span>';
    echo '</span>';
    echo '<span class="choice-separator"></span>';

    foreach ($ratings as $ratingKey => $ratingMeta) {
        $isSelected = ($selectedRating === $ratingKey);
        $dotClass = $isSelected
            ? 'dot-label is-selected ' . $ratingMeta['class']
            : 'dot-label ' . $ratingMeta['class'] . '-light';
        echo '<span class="' . e($dotClass) . '" title="' . e($ratingMeta['label']) . ($isSelected ? ' (selected)' : '') . '"></span>';
    }
    echo '</div>';
}

require_once __DIR__ . '/header.php';
?>

<fieldset class="form-section">
    <legend>Info</legend>
    <?php
    $infoRows = [];
    if ($nickname !== '') {
        $infoRows['Name'] = $nickname;
    }
    if (!empty($basicInfo['age'])) {
        $infoRows['Age'] = (string) $basicInfo['age'];
    }
    $labeledFields = [
        'gender'      => 'Gender',
        'genitals'    => 'Genitals',
        'boob_size'   => 'Boob size',
        'orientation' => 'Orientation',
        'body_count'  => 'Body count',
    ];
    foreach ($labeledFields as $fieldKey => $fieldTitle) {
        $val = (string) ($basicInfo[$fieldKey] ?? '');
        if ($val !== '' && $val !== 'none' && isset($infoOptions[$fieldKey][$val])) {
            $infoRows[$fieldTitle] = $infoOptions[$fieldKey][$val];
        }
    }
    $notes = trim((string) ($basicInfo['notes'] ?? ''));
    ?>

    <?php if (empty($infoRows) && $notes === ''): ?>
        <p class="muted-text">No profile details entered.</p>
    <?php else: ?>
        <?php if (!empty($infoRows)): ?>
            <div class="info-grid">
                <?php foreach ($infoRows as $label => $value): ?>
                    <div class="info-card">
                        <span class="info-card-label"><?= e($label) ?></span>
                        <span class="info-card-value"><?= e($value) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($notes !== ''): ?>
            <div class="notes-box">
                <strong>Notes</strong>
                <p><?= nl2br(e($notes)) ?></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</fieldset>

<fieldset class="form-section">
    <legend>Preferences</legend>

    <?php foreach ($sections as $sectionKey => $section): ?>
        <div class="table-wrapper">
            <h2><?= e($section['title']) ?></h2>
            <table class="preference-table">
                <?php if ($section['columns'] !== null): ?>
                    <thead>
                        <tr>
                            <th></th>
                            <?php foreach ($section['columns'] as $colLabel): ?>
                                <th><?= e($colLabel) ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                <?php endif; ?>
                <tbody>
                    <?php foreach ($section['items'] as $itemLabel): ?>
                        <?php
                        $itemKey = slugifyKinkKey($itemLabel);
                        $savedItem = $preferences[$sectionKey][$itemKey] ?? [];
                        ?>
                        <tr>
                            <td><div class="label-cell"><?= e($itemLabel) ?></div></td>
                            <?php if ($section['columns'] === null): ?>
                                <?php
                                $tried = !empty($savedItem['tried']);
                                $rating = (string) ($savedItem['rating'] ?? 'not_entered');
                                if (!array_key_exists($rating, $ratings)) {
                                    $rating = 'not_entered';
                                }
                                ?>
                                <td class="single-choice-cell"><?php renderReadOnlyCell($tried, $rating, $ratings); ?></td>
                            <?php else: ?>
                                <?php foreach ($section['columns'] as $colKey => $colLabel): ?>
                                    <?php
                                    $colData = is_array($savedItem[$colKey] ?? null) ? $savedItem[$colKey] : [];
                                    $tried = !empty($colData['tried']);
                                    $rating = (string) ($colData['rating'] ?? 'not_entered');
                                    if (!array_key_exists($rating, $ratings)) {
                                        $rating = 'not_entered';
                                    }
                                    ?>
                                    <td data-label="<?= e($colLabel) ?>"><?php renderReadOnlyCell($tried, $rating, $ratings); ?></td>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endforeach; ?>
</fieldset>

<?php
$exportInfo = [];
foreach ($infoRows as $label => $value) {
    $exportInfo[] = ['label' => $label, 'value' => $value];
}

$exportRatings = [];
foreach ($ratings as $rKey => $rMeta) {
    $exportRatings[] = ['key' => $rKey, 'label' => $rMeta['label']];
}

$exportSections = [];
foreach ($sections as $sectionKey => $section) {
    $cols = [];
    if ($section['columns'] !== null) {
        foreach ($section['columns'] as $cKey => $cLabel) {
            $cols[] = ['key' => $cKey, 'label' => $cLabel];
        }
    }
    $itemsOut = [];
    foreach ($section['items'] as $itemLabel) {
        $itemKey = slugifyKinkKey($itemLabel);
        $savedItem = $preferences[$sectionKey][$itemKey] ?? [];
        $vals = [];
        if ($section['columns'] === null) {
            $r = (string) ($savedItem['rating'] ?? 'not_entered');
            $vals[] = [
                'tried'  => !empty($savedItem['tried']),
                'rating' => array_key_exists($r, $ratings) ? $r : 'not_entered',
            ];
        } else {
            foreach (array_keys($section['columns']) as $colKey) {
                $colData = is_array($savedItem[$colKey] ?? null) ? $savedItem[$colKey] : [];
                $r = (string) ($colData['rating'] ?? 'not_entered');
                $vals[] = [
                    'tried'  => !empty($colData['tried']),
                    'rating' => array_key_exists($r, $ratings) ? $r : 'not_entered',
                ];
            }
        }
        $itemsOut[] = ['label' => $itemLabel, 'values' => $vals];
    }
    $exportSections[] = [
        'title'   => $section['title'],
        'columns' => $cols,
        'items'   => $itemsOut,
    ];
}

$exportPayload = [
    'slug'     => (string) $list['slug'],
    'nickname' => $nickname,
    'shareUrl' => ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/' . $list['slug'],
    'info'     => $exportInfo,
    'notes'    => $notes,
    'ratings'  => $exportRatings,
    'sections' => $exportSections,
];
?>
<script type="application/json" id="kinkyme-export-data"><?= json_encode($exportPayload, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) ?></script>

<?php
require_once __DIR__ . '/footer.php';
