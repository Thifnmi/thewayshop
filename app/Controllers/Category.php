<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Category extends BaseController
{
    public function index(string $cmeta)
    {
        session_start();
        if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
        $offset = ($page-1) * 9;
        
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
        $productModel = new productModel();
        $cate = $categoryModel->getCategoryIdByMetalTitle($cmeta);
        $total_product = $productModel->getCountProduct((int)($cate[0]['id']));
        $total_pages = ceil($total_product / 9);
        $products = $productModel->getProductByCategory((int)($cate[0]['id']),$offset,9);
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        return view('client/shop',$data);
    }
    public function getWatch(string $cgender)
    {
        if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
        $offset = ($page-1) * 9;
        return view('client/shop',);
        # code...
    }
}