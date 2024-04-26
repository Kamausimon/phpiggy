<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};



class AuthController
{
    public function __construct(private TemplateEngine $view, private ValidatorService $validatorService, private UserService $UserService)
    {
    }

    public function registerView()
    {
        echo $this->view->render("/register.php");
    }

    public function register()
    {
        $this->validatorService->validateRegister($_POST);

        $this->UserService->isEmailTaken($_POST['email']);

        $this->UserService->create($_POST);

        redirectTo('/');
    }

    public function loginView()
    {
        echo $this->view->render("/login.php");
    }

    public function login()
    {
        $this->validatorService->validateLogin($_POST);

        $this->UserService->login($_POST);

        redirectTo('/');
    }
}
