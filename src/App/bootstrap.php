<?php

declare(strict_types=1);

require  __DIR__ . "/../../vendor/autoload.php";

use App\Controllers\AboutController;
use Framework\App;
use App\Controllers\HomeController;

$app = new App();

$app->get('/', [HomeController::class, 'Home']);
$app->get('/about', [AboutController::class, 'About']);


return $app;
