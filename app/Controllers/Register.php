<?php
namespace App\Controllers;

use App\Models\accountsModel;
use App\Models\usersModel;

class Register extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            // session_start();
            $accountsModel = new accountsModel();
            $userModel = new usersModel();
            $fullname = $this->request->getVar('Rfullname');
            $username = $this->request->getVar('Rusername');
            $password = $this->request->getvar('Rpassword');
            $email = $this->request->getvar('Remail');
            $hashed_password = md5($password);
            $account = $accountsModel->checkUsername($username);
            if($account){
                $data["messRegisterFalse"] = "fail";
            } else {
                $userData = [
                    'fullname' => $fullname,
                    'email' => $email,
                    'role_id' => 3,
                ];
                $id = $userModel->insert($userData);
                $data_insert = [
                    'user_id' => $id,
                    'username' => $username,
                    'password' => $hashed_password,
                ];
                $accountsModel->insert($data_insert);
                $data["messRegisterSuccess"] = "true";
                // echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                // header('Refresh: 1; URL=http://localhost/thewayshop/public/Login');
            }
            return view('client/login',$data);
        }
        return view('client/login');
    }
}