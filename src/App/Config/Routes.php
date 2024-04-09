<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\{HomeController, AboutController};


function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'Home']);
    $app->get('/about', [AboutController::class, 'About']);
}
