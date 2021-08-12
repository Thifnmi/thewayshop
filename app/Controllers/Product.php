<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productmodel;

class Product extends BaseController
{
    public function index()
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/shop-detail',$data);
    }
}