<?php

namespace App\Controllers;

class Profile extends BaseController {
  public function index()
    {
        echo view('template/header');
        echo view('content/profile');
        echo view('template/footer');
    }
}