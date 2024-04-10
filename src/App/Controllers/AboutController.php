<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AboutController
{


    public function __construct(private TemplateEngine $view)
    {
        // point to the place that contains our view

    }

    public function About()
    {
        echo $this->view->render("/about.php", [
            "title" => "About Page",
            "dangerousData" => '<script> alert(123) </script>'
        ]);
    }
}
