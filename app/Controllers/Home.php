<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;

class Home extends BaseController
{
	public function index()
	{
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$productModel = new productModel();
		// $product = $productModel->getShowProduct($cid);
		$data['categories'] = $categories;
		return view('client/index', $data);
	}
}
