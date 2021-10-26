<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\accountsModel;
use App\Models\usersModel;

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
                $model = new accountsModel();
                $userModel =  new usersModel();
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');
                $hashed_password = md5($password);
                $data = [
                    'username' => $username,
                    "password" => $hashed_password
                ];
                $in4 = $model->where($data)->first();
                if($in4){
                    $user = $userModel->getUserById($in4['user_id']);
                    if ($user && $user['role_id'] != 3) {
                        session_start();
                        $info = $userModel->getUserById($in4['user_id']) + $in4;
                        $_SESSION['user'] = $info;
                        return redirect()->to(base_url() . '/admin/dashboard');
                    } else {
                        $data["messLogin"] = "fail";
                        return view('admin/login',$data);
                    }
                }
                $data["messLogin"] = "fail";
                return view('admin/login',$data);
            }
        }
        return view('admin/Login');
    }

    private function setUserSession($info)
    {
        $data = [
            'id' => $info['id'],
            'username' => $info['username'],
            'fullname' => $info['fullname'],
            'email' => $info['email'],
            'image' => $info['image'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
}
