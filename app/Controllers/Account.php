<?php
namespace App\Controllers;

use App\Models\categoryModel;

class Account extends BaseController
{
    public function index()
    {
        session_start();

        if (empty($_SESSION['user']))
		{
            return redirect()->to(base_url().'Login');
        }
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/account', $data);
        # code...
    }
}