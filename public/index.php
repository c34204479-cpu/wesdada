<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Deteksi environment: hosting (public_html) vs lokal (public/)
|--------------------------------------------------------------------------
| Di hosting Hostinger: semua isi public/ di-deploy ke public_html/
|   - index.php ada di: /home/user/public_html/index.php
|   - vendor, app, dll ada di: /home/user/public_html/
|   - storage ada di: /home/user/public_html/storage/
|   - basePath  = public_html/      (= __DIR__)
|   - publicPath = public_html/      (= __DIR__)  ← tidak ada subfolder public/
|
| Di lokal:
|   - index.php ada di: project/public/index.php
|   - app, dll ada di: project/
|   - basePath  = project/           (= __DIR__.'/..')
|   - publicPath = project/public/   (= __DIR__)
*/
$basePath = file_exists(__DIR__ . '/vendor/autoload.php')
    ? __DIR__
    : dirname(__DIR__);

// Maintenance mode check
if (file_exists($maintenance = $basePath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require $basePath . '/vendor/autoload.php';

// Bootstrap Laravel
$app = (require_once $basePath . '/bootstrap/app.php');

$app->handleRequest(Request::capture());
