<?php

declare(strict_types=1);

require_once __DIR__ . '/condb.php';
require_once __DIR__ . '/helpers.php';

getDb();

$pageTitle = 'KinkList — Create';
$formMode = 'create';
$formAction = '/save.php';

require_once __DIR__ . '/header.php';
require_once __DIR__ . '/body.php';
require_once __DIR__ . '/footer.php';
