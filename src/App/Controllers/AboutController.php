<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AboutController
{
    private TemplateEngine $view;

    public function __construct()
    {
        // point to the place that contains our view
        $this->view = new TemplateEngine(Paths::VIEW);
    }

    public function About()
    {
        echo $this->view->render("/about.php", [
            "title" => "About Page",
            "dangerousData" => '<script> alert(123) </script>'
        ]);
    }
}
