<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

ensureSession();

$formMode = $formMode ?? 'create';
$formAction = $formAction ?? '/save.php';

if ($formMode === 'create' && isset($_SESSION['old_input']) && is_array($_SESSION['old_input'])) {
    $oldInput = $_SESSION['old_input'];
    unset($_SESSION['old_input']);
} else {
    $oldInput = $formData ?? [];
}

$basicInfo = is_array($oldInput['basic_info'] ?? null) ? $oldInput['basic_info'] : [];
$preferences = is_array($oldInput['preferences'] ?? null) ? $oldInput['preferences'] : [];
$urlMode = ($oldInput['url_mode'] ?? 'random') === 'custom' ? 'custom' : 'random';
$customSlug = (string) ($oldInput['custom_slug'] ?? '');

$ratings = getRatings();
$infoOptions = getBasicInfoOptions();
$sections = getKinkSections();
$csrfToken = getCsrfToken();
$hostPrefix = getBaseHostPrefix();

/**
 * Renders the Tried checkbox + rating radio dots for one preference cell.
 *
 * @param array<string, array{label: string, class: string}> $ratings
 */
function renderChoiceCell(
    string $idPrefix,
    string $namePrefix,
    bool $tried,
    string $selectedRating,
    array $ratings
): void {
    $checkedAttr = $tried ? ' checked' : '';
    echo '<div class="choice-cell">';
    echo '<label class="choice-dot-checkbox" title="Tried">';
    echo '<input type="checkbox" name="' . e($namePrefix . '[tried]') . '" value="1"' . $checkedAttr . '>';
    echo '<span class="dot checkbox-visual"></span>';
    echo '</label>';
    echo '<span class="choice-separator"></span>';

    foreach ($ratings as $ratingKey => $ratingMeta) {
        $inputId = $idPrefix . '_' . $ratingKey;
        $isChecked = ($selectedRating === $ratingKey) ? ' checked' : '';
        echo '<input type="radio" id="' . e($inputId) . '" name="' . e($namePrefix . '[rating]') . '" value="' . e($ratingKey) . '"' . $isChecked . '>';
        echo '<label for="' . e($inputId) . '" class="dot-label ' . e($ratingMeta['class']) . '" title="' . e($ratingMeta['label']) . '"></label>';
    }

    echo '</div>';
}
?>

<form action="<?= e($formAction) ?>" method="POST">
    <input type="hidden" name="csrf_token" value="<?= e($csrfToken) ?>">

    <fieldset class="form-section">
        <legend>Info</legend>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="basic_info[nickname]" maxlength="100" value="<?= e((string) ($basicInfo['nickname'] ?? '')) ?>">
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="basic_info[age]" min="18" max="120" value="<?= e((string) ($basicInfo['age'] ?? '')) ?>">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="basic_info[gender]">
                <?php $curGender = (string) ($basicInfo['gender'] ?? ''); ?>
                <?php foreach ($infoOptions['gender'] as $val => $label): ?>
                    <option value="<?= e($val) ?>"<?= $curGender === $val ? ' selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Genitals</label>
            <div class="radio-group-horizontal">
                <?php $curGenitals = (string) ($basicInfo['genitals'] ?? ''); ?>
                <?php foreach ($infoOptions['genitals'] as $val => $label): ?>
                    <?php $genId = 'genitals_' . ($val === '' ? 'unspecified' : $val); ?>
                    <div class="radio-item">
                        <input type="radio" id="<?= e($genId) ?>" name="basic_info[genitals]" value="<?= e($val) ?>"<?= $curGenitals === $val ? ' checked' : '' ?>>
                        <label for="<?= e($genId) ?>"><?= e($label) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="boob_size">Boob size</label>
            <select id="boob_size" name="basic_info[boob_size]">
                <?php $curBoob = (string) ($basicInfo['boob_size'] ?? 'none'); ?>
                <?php foreach ($infoOptions['boob_size'] as $val => $label): ?>
                    <option value="<?= e($val) ?>"<?= $curBoob === $val ? ' selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="orientation">Orientation</label>
            <select id="orientation" name="basic_info[orientation]">
                <?php $curOrient = (string) ($basicInfo['orientation'] ?? ''); ?>
                <?php foreach ($infoOptions['orientation'] as $val => $label): ?>
                    <option value="<?= e($val) ?>"<?= $curOrient === $val ? ' selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="body_count">Body count</label>
            <select id="body_count" name="basic_info[body_count]">
                <?php $curCount = (string) ($basicInfo['body_count'] ?? 'none'); ?>
                <?php foreach ($infoOptions['body_count'] as $val => $label): ?>
                    <?php $valStr = (string) $val; ?>
                    <option value="<?= e($valStr) ?>"<?= $curCount === $valStr ? ' selected' : '' ?>><?= e($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea id="notes" name="basic_info[notes]" maxlength="2000" placeholder="Do you want to specify something or is something missing? Write it here!"><?= e((string) ($basicInfo['notes'] ?? '')) ?></textarea>
        </div>
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
                                    <td class="single-choice-cell">
                                        <?php renderChoiceCell(
                                            $sectionKey . '_' . $itemKey,
                                            'preferences[' . $sectionKey . '][' . $itemKey . ']',
                                            $tried,
                                            $rating,
                                            $ratings
                                        ); ?>
                                    </td>
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
                                        <td data-label="<?= e($colLabel) ?>">
                                            <?php renderChoiceCell(
                                                $sectionKey . '_' . $itemKey . '_' . $colKey,
                                                'preferences[' . $sectionKey . '][' . $itemKey . '][' . $colKey . ']',
                                                $tried,
                                                $rating,
                                                $ratings
                                            ); ?>
                                        </td>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </fieldset>

    <fieldset class="form-section">
        <legend>Settings</legend>

        <?php if ($formMode === 'edit'): ?>
            <div class="form-group">
                <label for="custom_slug">Link</label>
                <div class="input-group">
                    <span class="input-group-prefix"><?= e($hostPrefix) ?></span>
                    <input type="text" id="custom_slug" name="custom_slug" pattern="[a-zA-Z0-9-]{2,64}" value="<?= e($customSlug) ?>" required>
                </div>
                <div class="form-help-text">Only letters, numbers, and hyphens are allowed (2–64 characters). Changing this updates your list URL.</div>
            </div>

            <div class="form-group">
                <label for="password">New edit password (optional)</label>
                <input type="password" id="password" name="edit_password" placeholder="Leave blank to keep your current password">
                <div class="form-help-text">Enter a new password only if you want to change it.</div>
            </div>
        <?php else: ?>
            <div class="form-group">
                <label for="password">Edit password</label>
                <input type="password" id="password" name="edit_password" required>
                <div class="form-help-text">You will need this password for any future changes. Keep it safe!</div>
            </div>

            <div class="form-group">
                <label>Link</label>
                <div class="radio-group-horizontal">
                    <div class="radio-item">
                        <input type="radio" id="url_random" name="url_mode" value="random"<?= $urlMode === 'random' ? ' checked' : '' ?>>
                        <label for="url_random">Random</label>
                    </div>

                    <div class="radio-item">
                        <input type="radio" id="url_custom" name="url_mode" value="custom"<?= $urlMode === 'custom' ? ' checked' : '' ?>>
                        <label for="url_custom">Custom</label>
                    </div>
                </div>
            </div>

            <div class="form-group<?= $urlMode === 'custom' ? ' is-visible' : '' ?>" id="custom-slug-group">
                <div class="input-group">
                    <span class="input-group-prefix"><?= e($hostPrefix) ?></span>
                    <input type="text" id="custom_slug" name="custom_slug" pattern="[a-zA-Z0-9-]{2,64}" placeholder="my-list" value="<?= e($customSlug) ?>">
                </div>
                <div class="form-help-text">Only letters, numbers, and hyphens are allowed (2–64 characters).</div>
            </div>
        <?php endif; ?>
    </fieldset>

    <div class="form-actions">
        <button type="submit" class="submit-button"><?= $formMode === 'edit' ? 'Save changes' : 'Save' ?></button>
        <?php if ($formMode === 'edit' && !empty($currentSlug)): ?>
            <a href="/<?= e(rawurlencode($currentSlug)) ?>" class="btn-secondary">Back to list</a>
        <?php endif; ?>
    </div>
</form>
