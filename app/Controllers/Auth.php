<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function signin()
    {
        echo view('template/header');
        echo view('content/signin');
        echo view('template/footer');
    }

    public function signup()
    {
        echo view('template/header');
        echo view('content/signup');
        echo view('template/footer');
    }
}