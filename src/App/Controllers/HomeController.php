<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
//import the paths class here
use App\Config\Paths;

class HomeController
{


   public function __construct(private TemplateEngine $view)
   {
      // the template engine points to the paths that contains constant VIEW

   }

   public function Home()
   {
      echo  $this->view->render("/index.php", [
         'title' => 'Home page'
      ]);
   }
}
