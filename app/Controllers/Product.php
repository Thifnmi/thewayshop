<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\imageModel;
use App\Models\productModel;

class Product extends BaseController
{
    public function index(int $pid)
    {
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        $productModel = new productModel();
        $product = $productModel->getProductById($pid);
        $data['product'] = $product;
        $imageModel = new imageModel();
        $productImage = $imageModel->getImagesByProductId($pid);
        $data['productImage'] = $productImage;
        return view('client/shop-detail',$data);
    }
}