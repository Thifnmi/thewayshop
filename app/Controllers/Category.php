<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productmodel;

class Category extends BaseController
{
    public function index(int $cid)
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        $productModel = new productmodel();
        $products = $productModel->getProductByCategory($cid);
        $data['products'] = $products;
        return view('client/shop',$data);
    }
}