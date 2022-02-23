<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
  public function index()
  {
    helper(['form']);
    echo view('template/header');
    echo view('content/signin');
    echo view('template/footer');
  }

  public function auth()
  {
    $session = session();
    $model = new UserModel();
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $data = $model->where('email', $email)->first();
    if ($data) {
      $pass = $data['password'];
      $verify_pass = password_verify($password, $pass);
      if ($verify_pass) {
        $ses_data = [
          'id'       => $data['user_id'],
          'name'     => $data['name'],
          'email'    => $data['email'],
          'logged_in'     => TRUE
        ];
        $session->set($ses_data);
        return redirect()->to('/');
      } else {
        $session->setFlashdata('msg', 'Wrong Password');
        return redirect()->to('/signin');
      }
    } else {
      $session->setFlashdata('msg', 'Email not Found');
      return redirect()->to('/signin');
    }
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/signin');
  }
}
