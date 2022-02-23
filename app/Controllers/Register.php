<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{
  public function index()
  {
    helper(['form']);
    $data = [];
    echo view('template/header');
    echo view('content/signup', $data);
    echo view('template/footer');
  }

  public function save()
  {
    helper(['form']);
    $rules = [
      'name'          => 'required|min_length[3]|max_length[150]',
      'email'         => 'required|min_length[6]|max_length[150]|valid_email|is_unique[users.email]',
      'prodi'         => 'required|min_length[3]|max_length[100]',
      'password'      => 'required|min_length[3]|max_length[200]',
    ];

    if ($this->validate($rules)) {
      $model = new UserModel();
      $data = [
        'name'     => $this->request->getVar('name'),
        'email'    => $this->request->getVar('email'),
        'prodi'    => $this->request->getVar('prodi'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
      ];
      $model->save($data);
      return redirect()->to('/login');
    } else {
      $data['validation'] = $this->validator;
      echo view('template/header');
      echo view('content/signup', $data);
      echo view('template/footer');
    }
  }
}
