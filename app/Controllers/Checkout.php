<?php
namespace App\Controllers;

use App\Models\categoryModel;

class Checkout extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/checkout',$data);
        # code...
    }
}