<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Search extends BaseController
{
    public function index()
    {
        session_start();
        $key = '';
        $sortKey = '';
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
        if (isset($_GET['price'])) {
            $sortKey = $_GET['price'];
            if ($sortKey == 'asc') {
                $prices = [];
                $raw_prices = array_column($products, (str_replace(".","",'price')));
                foreach($raw_prices as $item){
                    $price = (str_replace(".","",$item));
                    $prices[] = (int)$price;
                }
                array_multisort($prices, SORT_ASC,SORT_NUMERIC, $products);
            } else if ($sortKey == 'desc') {
                $prices = [];
                $raw_prices = array_column($products, 'price');
                foreach($raw_prices as $item){
                    $price = (str_replace(".","",$item));
                    $prices[] = (int)$price;
                }
                array_multisort($prices, SORT_DESC, SORT_NUMERIC,$products);
            }
        }
        // var_dump($products);
        // var_dump(array_count_values(array_column($products, 'id')));
        // die();
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
}
