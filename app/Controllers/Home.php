<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Home extends BaseController
{
	public function index()
	{
		session_start();
		
		$supplierModel =  new supplierModel();
		$supplier = $supplierModel->getAllSupplier();
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$productModel = new productModel();
		$products = array();
		foreach($categories as $item){
			$product = $productModel->getProductRelease($item['id']);
			$products = array_merge($products, $product);
		}

		$data['supplier'] = $supplier;
		$data['categories'] = $categories;
		$data['products'] = $products;
		return view('client/index', $data);
	}
}
