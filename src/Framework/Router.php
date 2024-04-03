<?php

declare(strict_types=1);

namespace Framework;

class   Router{
  private array $routes = [];

  public function add (string $method,string $path){
    $path = $this->normalizePath($path);
     $this->routes[] = [
        "path"=> $path,
        "method" => strtoupper($method)
     ];
  }

  //route normalization
  private function normalizePath(string $path):string 
  {
    $path = trim($path,'/');//trims the incoming string to remove the / characters
    $path = "/{$path}/";//normalizes the path
    $path = preg_replace('#[/]{2,}#','/',$path);

    return $path;
  }
}