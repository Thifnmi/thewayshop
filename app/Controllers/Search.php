<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Search extends BaseController
{
    public function index()
    {
        $key = '';
        if (isset($_GET['key'])) {
            $key = $_GET['key'];
        }
        if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
        $offset = ($page-1) * 9;
        $productModel = new productModel();
        $products = $productModel->getProductByKey($key, $offset,9);
        $total_product = count($productModel->countProductGetByKey($key));
        $categoryModel = new categoryModel();
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
		$categories = $categoryModel->getAllcategory();
        $total_pages = ceil($total_product / 9);
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        return view('client/shop', $data);
    }
}
