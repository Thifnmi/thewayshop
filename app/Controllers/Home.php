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
		foreach($categories as $category)
			$products['item'] = $productModel->getShowProduct($category['id']);
		$data['categories'] = $categories;
		$data['products'] = $products;
		return view('client/index', $data);
	}
}
