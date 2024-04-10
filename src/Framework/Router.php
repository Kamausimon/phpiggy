<?php

declare(strict_types=1);

namespace Framework;

class   Router
{
  private array $middlewares = [];
  private array $routes = [];

  public function add(string $method, string $path, array $controller)
  {
    $path = $this->normalizePath($path);
    $this->routes[] = [
      "path" => $path,
      "method" => strtoupper($method),
      "controller" => $controller
    ];
  }

  //route normalization
  private function normalizePath(string $path): string
  {
    $path = trim($path, '/'); //trims the incoming string to remove the / characters
    $path = "/{$path}/"; //normalizes the path
    $path = preg_replace('#[/]{2,}#', '/', $path);

    return $path;
  }

  public function dispatch(string $path, string $method, Container $container = null)
  {
    $path = $this->normalizePath($path);
    $method = strtoupper($method);

    foreach ($this->routes as $route) {
      if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
        continue;
      }

      [$class, $function] = $route['controller'];
      $controllerInstance = $container ? $container->resolve($class) : new $class;
      $controllerInstance->{$function}();
    }
  }

  public function addMiddleware(string $middleware)
  {
    $this->middlewares = $middleware;
  }
}
