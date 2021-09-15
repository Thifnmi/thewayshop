<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\accountsModel;
use App\Models\usersModel;

class Account extends BaseController
{
    public function index()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $db = \Config\Database::connect();
        $query = "SELECT users.id, users.fullname, users.image, users.phone_number, users.gender, users.role_id, users.birthday, users.address,
                    users.email, users.facebook, accounts.username, accounts.password FROM users JOIN accounts ON users.id = accounts.user_id";
        $accountsModel = $db->query($query)->getResultArray();
        $data['title'] = 'admin';
        $data['user'] = $accountsModel;
        echo view('admin/account/index', $data);
    }
    public function add()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }

        helper('file');
        helper('form');

        $data['title'] = 'admin';
        if ($this->request->getMethod() == 'post') {
            $model = new accountsModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $gender = $this->request->getVar('gender');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $country = $this->request->getVar('country');
            $facebook = $this->request->getVar('facebook');
            $file = $this->request->getFile('file');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $path = $file->move("./public/client/assets/product/", $newName);
            }


            $url_avatar = "/public/client/assets/product/" . $newName;
            $data_insert = [
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password),
                'birthday' => $birthday,
                'gender' => $gender,
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address,
                'status' => 1,
                'role_id' => 1,
                'country' => $country,
                'created_on' => date('Y-m-d'),
                'facebook' => $facebook,
                'twitter' => $facebook,
                'gmail' => $facebook,
                'insta' => $facebook,
                'createdDate' => date('Y-m-d'),
                'modifiedDate' => date('Y-m-d'),
                // 'createdBy' => $_SESSION['user']['fullname']
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url() . '/admin/account');
        }
        echo view('admin/account/add', $data);

        //--------------------------------------------------------------------
    }
    public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $db = \Config\Database::connect();
        $query = "SELECT users.id, users.fullname, users.image, users.phone_number, users.gender, users.role_id, users.birthday, users.address,
                    users.email, users.facebook, accounts.username, accounts.password FROM users JOIN accounts ON users.id = accounts.user_id WHERE users.id = $id";
        $accountsModel = $db->query($query)->getResultArray();
        $data['info'] = $accountsModel;
        $data['title'] = 'admin';
        if ($this->request->getMethod() == 'post') {

            $model = new accountsModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $gender = $this->request->getVar('gender');
            $phone_number = $this->request->getVar('phone_number');
            $address = $this->request->getVar('address');
            $facebook = $this->request->getVar('facebook');
            $file = $this->request->getFile('file');
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $path = $file->move("./public/client/assets/product/", $newName);
                    $url_avatar = "/public/client/assets/product/" . $newName;
                } else {
                    $url_avatar = '';
                }
            }
            $data_insert = [
                'id' => $id,
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password),
                'birthday' => date('Y-m-d', strtotime($birthday)),
                'gender' => $gender,
                'phone_number' => $phone_number,
                'email' => $email,
                'address' => $address,
                'status' => 1,
                'role_id' => 1,
                'created_on' => date('Y-m-d'),
                'facebook' => $facebook,
                'email' => $email,
                
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/account');
        }
        echo view('admin/account/edit', $data);
    }
    public function profile()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $adminModel = new accountsModel();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->find($id);
        return view('admin/account/profile', $data);
    }
    public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $userModel = new usersModel();
        $userModel->where('id', $id)->delete();
        $data['title'] = 'id';
        $data['user'] = $userModel->findAll();
        return redirect()->to(base_url() . '/admin/account');
    }
}
