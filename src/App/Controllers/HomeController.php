<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
//import the paths class here
use App\Config\Paths;

class HomeController
{
   private TemplateEngine $view;

   public function __construct()
   {
      $this->view = new TemplateEngine(Paths::class);
   }

   public function Home()
   {
      dd($this->view);
      echo " Home page";
   }
}
