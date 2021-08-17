<?php
namespace App\Controllers;

use App\Models\categoryModel;

class Account extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/account', $data);
        # code...
    }
}