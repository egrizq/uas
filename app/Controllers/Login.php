<?php

namespace App\Controllers;
use App\Models\Data;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function action()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
     
        $model = new Data;
        $check_data = $model->check_data($username);

        if ($username == "rizqramadhan" && $password == "rizqramadhan") {
            return redirect()->to(base_url("/dashboard"));
        }

        if (!empty($check_data) && password_verify($password[0], $check_data['password'])) {
            session()->set('username', $check_data['username']);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('error', 'Invalid credentials.');
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}