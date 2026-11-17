<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$pageTitle = $pageTitle ?? 'KinkyMe';
$showLegend = $showLegend ?? true;
$flash = consumeFlash();
$ratings = getRatings();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle) ?></title>
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="apple-touch-icon" href="/favicon.svg">
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

<header class="site-header">
  <h1><a href="/" class="brand-link">KinkyMe</a></h1>
  <?php if (!empty($headerActionsHtml)): ?>
    <div class="header-actions"><?= $headerActionsHtml ?></div>
  <?php endif; ?>
</header>

<?php if ($showLegend): ?>
<div class="legend-container">
  <span class="legend-title">Legend:</span>

  <div class="legend-item">
    <span class="choice-dot-checkbox legend-checkbox" title="Tried">
      <input type="checkbox" checked disabled tabindex="-1" aria-hidden="true">
      <span class="dot checkbox-visual"></span>
    </span>
    <span>Tried</span>
  </div>

  <?php foreach ($ratings as $rating): ?>
  <div class="legend-item">
    <span class="dot <?= e($rating['class']) ?>"></span>
    <span><?= e($rating['label']) ?></span>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<?php if ($flash !== null): ?>
<div class="alert <?= $flash['type'] === 'error' ? 'alert-error' : 'alert-success' ?>">
  <?= e($flash['message']) ?>
</div>
<?php endif; ?>
