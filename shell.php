<?php

if (!defined('DOKU_INC')) define('DOKU_INC', __DIR__ . '/../../../');
require_once(DOKU_INC . 'inc/init.php');
require_once(__DIR__ . '/P0wnyShell.php');

if(!auth_isadmin()) {
    header('HTTP/1.0 403 Forbidden');
    echo 'Forbidden';
    exit;
}

$p0wny = new P0wnyShell();
if (isset($_GET['feature'])) {
    $p0wny->execute();
}

