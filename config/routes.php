<?php

require_once __DIR__ . '/../config/functions.php';

$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

if (! file_exists(__DIR__.'/../src/Controller/' . $controller . '.controller.php')) {
    $controller = 'index';
}

require_once __DIR__ . '/../src/Controllers/' . $controller . '.controller.php';
