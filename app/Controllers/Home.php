<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        echo view('template/header');
        echo view('content/home');
        echo view('template/footer');
    }
}
