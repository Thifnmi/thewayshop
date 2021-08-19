<?php
namespace App\Controllers;

use App\Models\accountModel;

class Register extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            session_start();
            $model = new accountModel();
            $fullname = $this->request->getVar('Rfullname');
            $username = $this->request->getVar('Rusername');
            $password = $this->request->getvar('Rpassword');
            $address = $this->request->getvar('Raddress');
            // $hashed_password = md5($password);
            $account = $model->checkUsername($username);
            if($account){
                echo '<script>alert("Username is not available");</script>';
                // $data['message'] = 'fail';
                // $data['error'] = 'username is not available';
                // return view('client/login', $data);
            } else {
                $data_insert = [
                    'username' => $username,
                    'fullname' => $fullname,
                    'password' => $password,
                    'role_id' => 3,
                    'address' => $address,
                ];
                $model->insert($data_insert);
                return view('client/login');
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