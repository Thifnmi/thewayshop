<?php
namespace App\Controllers;

use App\Models\accountsModel;
use App\Models\categoryModel;
use App\Models\supplierModel;
use App\Models\usersModel;

class Account extends BaseController
{
    public function index()
    {
        session_start();

        if (empty($_SESSION['customer']))
		{
            return redirect()->to(base_url().'/Login');
        }
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
        $userModel = new usersModel();
        $accountModel = new accountsModel();
        $user = $userModel->getUserById($_SESSION['customer']['id']);
        $accounts = $accountModel->getAccountById($_SESSION['customer']['id']);
        $info = array_merge($user,$accounts);
		$data['categories'] = $categories;
        $data['info'] = $info;
        return view('client/account', $data);
    }
    public function edit()
    {
        session_start();

        if (empty($_SESSION['customer']))
		{
            return redirect()->to(base_url().'/Login');
        }
        if($this->request->getMethod() == 'post'){
            $password = $this->request->getVar("password");
            $fullname = $this->request->getVar("fullname");
            $gender = $this->request->getVar("gender");
            $birthday = $this->request->getVar("birthday");
            $email = $this->request->getVar("email");
            $phone = $this->request->getVar("phone");
            $address = $this->request->getVar("address");
            $accountModel = new accountsModel();
            $userModel = new usersModel();
            $data_table_user = [
                'fullname'  => $fullname,
                'phone_number'  =>$phone,
                'gender'    =>$gender,
                'birthday'  =>$birthday,
                'address'   =>$address,
                'email'     =>$email
            ];
            $data_table_account = [
                'password'  =>md5($password),
            ];
            // var_dump($gender);
            // die();
            if($userModel->update($_SESSION['customer']['id'],$data_table_user) && $accountModel->update($_SESSION['customer']['id'],$data_table_account)){
                $data['success'] = "success";
            }

            // var_dump($_SESSION['customer']['id'],$data_table_user,$data_table_account);
            // die();
            return redirect()->to(base_url().'/Account');
        }
    }
}