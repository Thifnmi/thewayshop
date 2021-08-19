<?php
namespace App\Controllers;

use App\Models\accountModel;

class Login extends BaseController
{
    public function index()
    {
        // session_start();
        // if ($_SESSION['customer']) {
        //     return redirect()->to(base_url());
        // }
        if ($this->request->getMethod() == 'post') {
            session_start();
            $model = new accountModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getvar('password');
            // $hashed_password = md5($password);
            $data = [
                'username' => $username,
                'password' => $password
            ];
            $user = $model->where($data)->first();
            if ($user) {
                $_SESSION['customer'] = $user;
                var_dump($_SESSION['customer']);
                return redirect()->to(base_url() . '/');
            } else {
                echo '<script>alert("Username/Email or Password don\'t match");</script>';
            }
        }
        return view('client/login');
    }
    public function logout()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url());
    }
}