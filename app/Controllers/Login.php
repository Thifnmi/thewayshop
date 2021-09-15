<?php
namespace App\Controllers;

use App\Models\accountsModel;
use App\Models\usersModel;

class Login extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $model = new accountsModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getvar('password');
            $hashed_password = md5($password);
            $data = [
                'username' => $username,
                'password' => $hashed_password
            ];
            $user = $model->where($data)->first();
            if ($user) {
                session_start();
                $infoModel = new usersModel();
                $info = $infoModel->getUserById($user['user_id']) + $user;
                $_SESSION['customer'] = $info;
                return redirect()->to(base_url());
                // echo "<script language=javascript> javascript:history.go(-2);</script>";
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