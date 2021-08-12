<?php
namespace App\Controllers;

use App\Models\categoryModel;

class Cart extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/cart',$data);
        # code...
    }
}