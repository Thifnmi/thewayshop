<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;

class Home extends BaseController
{
	public function index()
	{
		session_start();
		
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$productModel = new productModel();
		$products = $productModel->getAllProduct();
		$data['categories'] = $categories;
		$data['products'] = $products;
		return view('client/index', $data);
	}
}
