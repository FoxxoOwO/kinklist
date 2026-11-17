<?php

declare(strict_types=1);

require_once __DIR__ . '/condb.php';
require_once __DIR__ . '/helpers.php';

ensureSession();

$slug = trim((string) ($_GET['slug'] ?? ''));
$pdo = getDb();
$list = $slug !== '' ? findListBySlug($pdo, $slug) : null;

if ($list === null) {
    http_response_code(404);
    $pageTitle = 'KinkList — Not found';
    $showLegend = false;
    require_once __DIR__ . '/header.php';
    ?>
    <section class="form-section empty-state">
        <h2>List not found</h2>
        <p>The KinkList at <code>/<?= e($slug) ?></code> does not exist.</p>
        <a href="/" class="submit-button btn-inline">Create a new KinkList</a>
    </section>
    <?php
    require_once __DIR__ . '/footer.php';
    exit;
}

$listId = (int) $list['id'];
$currentSlug = (string) $list['slug'];
$editUrl = '/' . rawurlencode($currentSlug) . '/edit';
$viewUrl = '/' . rawurlencode($currentSlug);
$isAuthorized = !empty($_SESSION['authorized_lists'][$listId]);

$formDataOverride = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? null)) {
        setFlash('error', 'Invalid form session. Please try again.');
        header('Location: ' . $editUrl, true, 303);
        exit;
    }

    $action = (string) ($_POST['action'] ?? 'save');

    if ($action === 'unlock') {
        $password = (string) ($_POST['password'] ?? '');
        if (password_verify($password, (string) $list['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['authorized_lists'][$listId] = true;
            setFlash('success', 'Unlocked! You can now edit your list or change its link.');
        } else {
            setFlash('error', 'Incorrect password.');
        }
        header('Location: ' . $editUrl, true, 303);
        exit;
    }

    if ($action === 'lock') {
        unset($_SESSION['authorized_lists'][$listId]);
        setFlash('success', 'Editing session locked.');
        header('Location: ' . $viewUrl, true, 303);
        exit;
    }

    if (!$isAuthorized) {
        setFlash('error', 'Please enter your edit password first.');
        header('Location: ' . $editUrl, true, 303);
        exit;
    }

    $rawBasic = is_array($_POST['basic_info'] ?? null) ? $_POST['basic_info'] : [];
    $rawPrefs = is_array($_POST['preferences'] ?? null) ? $_POST['preferences'] : [];
    $newSlug = trim((string) ($_POST['custom_slug'] ?? ''));
    $newPassword = (string) ($_POST['edit_password'] ?? '');

    $basicInfo = sanitizeBasicInfo($rawBasic);
    $preferences = sanitizePreferences($rawPrefs);

    $errorMsg = null;
    if (!isValidSlug($newSlug)) {
        $errorMsg = 'Link must be 2–64 characters and contain only letters, numbers, and hyphens.';
    } elseif (isReservedSlug($newSlug)) {
        $errorMsg = 'This link name is reserved. Please choose another one.';
    } elseif (slugExists($pdo, $newSlug, $listId)) {
        $errorMsg = 'This link is already taken. Please choose another one.';
    }

    if ($errorMsg !== null) {
        setFlash('error', $errorMsg);
        $formDataOverride = [
            'basic_info'  => $basicInfo,
            'preferences' => $preferences,
            'custom_slug' => $newSlug,
        ];
    } else {
        $passwordHash = $newPassword !== ''
            ? password_hash($newPassword, PASSWORD_DEFAULT)
            : (string) $list['password_hash'];

        $stmt = $pdo->prepare(<<<'SQL'
            UPDATE lists
            SET slug = :slug,
                password_hash = :password_hash,
                basic_info = :basic_info,
                preferences = :preferences,
                updated_at = CURRENT_TIMESTAMP
            WHERE id = :id
        SQL);

        $stmt->execute([
            ':slug'          => $newSlug,
            ':password_hash' => $passwordHash,
            ':basic_info'    => json_encode($basicInfo, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR),
            ':preferences'   => json_encode($preferences, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR),
            ':id'            => $listId,
        ]);

        setFlash('success', 'Your changes have been saved!');
        header('Location: /' . rawurlencode($newSlug), true, 303);
        exit;
    }
}

if (!$isAuthorized) {
    $pageTitle = 'Unlock KinkList — /' . $currentSlug;
    $showLegend = false;
    $headerActionsHtml = '<a href="' . e($viewUrl) . '" class="btn-secondary">Back to list</a>';
    require_once __DIR__ . '/header.php';
    ?>
    <section class="form-section auth-box">
        <h2>Enter edit password</h2>
        <p class="muted-text">To edit <code>/<?= e($currentSlug) ?></code> or change its link, enter the password you chose when creating the list.</p>
        <form action="<?= e($editUrl) ?>" method="POST">
            <input type="hidden" name="csrf_token" value="<?= e(getCsrfToken()) ?>">
            <input type="hidden" name="action" value="unlock">
            <div class="form-group">
                <label for="unlock_password">Edit password</label>
                <input type="password" id="unlock_password" name="password" required autofocus>
            </div>
            <div class="form-actions">
                <button type="submit" class="submit-button">Unlock</button>
                <a href="<?= e($viewUrl) ?>" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </section>
    <?php
    require_once __DIR__ . '/footer.php';
    exit;
}

$pageTitle = 'Edit KinkList — /' . $currentSlug;
$formMode = 'edit';
$formAction = $editUrl;
$formData = $formDataOverride ?? [
    'basic_info'  => $list['basic_info'],
    'preferences' => $list['preferences'],
    'custom_slug' => $currentSlug,
];

$headerActionsHtml = '<a href="' . e($viewUrl) . '" class="btn-secondary">View list</a>'
    . '<form action="' . e($editUrl) . '" method="POST" class="inline-form">'
    . '<input type="hidden" name="csrf_token" value="' . e(getCsrfToken()) . '">'
    . '<input type="hidden" name="action" value="lock">'
    . '<button type="submit" class="btn-secondary">Lock</button>'
    . '</form>';

require_once __DIR__ . '/header.php';
require_once __DIR__ . '/body.php';
require_once __DIR__ . '/footer.php';
