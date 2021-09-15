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
                echo '<script>alert("Username is not available");</script>';
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
                $message = '<script>alert("Register successfully");</script>';
                return redirect()->to(base_url().'/Login')->with('message', $message);
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