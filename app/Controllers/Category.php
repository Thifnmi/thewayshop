<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;

class Category extends BaseController
{
    public function index(int $cid)
    {
        if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
        $offset = ($page-1) * 9;
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
        $productModel = new productModel();
        $total_product = $productModel->getCountProduct($cid);
        $total_pages = ceil($total_product / 9);
        $products = $productModel->getProductByCategory($cid,$offset,9);
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        return view('client/shop',$data);
    }
}