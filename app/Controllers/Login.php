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
        session_start();
        // $_SESSION['current_page'] = $_SERVER['HTTP_REFERER'];

        if ($this->request->getMethod() == 'post') {
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
                echo "<script language=javascript> javascript:history.go(-2);</script>";
                // var_dump($_SESSION['customer']);
                // if(isset($_SESSION['current_page'])){
                //     var_dump($_SESSION['current_page']);
                //     echo 'login được';
                //     die();
                //     header("Location: ". $_SESSION['current_page']);
                // } else {
                //     header('location: http://localhost:8080/thewayshop/public');
                // }
                // return redirect()->to(base_url() . '/');
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