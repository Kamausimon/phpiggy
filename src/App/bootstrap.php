<?php

declare(strict_types=1);

require  __DIR__ . "/../../vendor/autoload.php"; //a more strict version of the include statement. if the file does not exist the require keyword stops all execution of the script



use Framework\App;
use App\Config\Paths;
use Dotenv\Dotenv;

use function App\Config\{registerRoutes, registerMiddleware};

$dotenv = DOTENV::createImmutable(Paths::ROOT); // a dotenv instance is being created and environment variables being loaded

$dotenv->load(); //the .env files are being loaded. The createimmutable ensures that our env values or variables cannot be overridden once created

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

return $app;
