<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\accountModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|max_length[50]',
                'password' => 'required|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Username/Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                session_start();
                $model = new accountModel();
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');
                $hashed_password = md5($password);
                $data = [
                    'username' => $username,
                    "password" => $password
                ];
                $user = $model->where($data)->first();
                if ($user) {
                    $_SESSION['user'] = $user;
                    return redirect()->to(base_url() . '/admin/dashboard');
                } else {
                    echo '<script>alert("Username/Email or Password don\'t match");</script>';
                }
            }
        }
        return view('admin/Login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'fullname' => $user['fullname'],
            'email' => $user['email'],
            
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
}
