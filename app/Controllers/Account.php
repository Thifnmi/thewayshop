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
		$data['categories'] = $categories;
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
            $birthday = $this->request->getVar("birthday");
            $email = $this->request->getVar("email");
            $phone = $this->request->getVar("phone");
            $address = $this->request->getVar("address");
            $accountModel = new accountsModel();
            $userModel = new usersModel();
            $data_table_user = [
                'fullname'  => $fullname,
                'phone_number'  =>$phone,

            ];

            var_dump($password,$fullname, $birthday,$email, $phone,$address);
            die();
            return redirect()->to(base_url().'/Account');
        }
    }
}