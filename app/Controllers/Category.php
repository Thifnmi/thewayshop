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
        $key = "";
        $sortKey = '';
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
        $productModel = new productModel();
        $cate = $categoryModel->getCategoryIdByMetalTitle($cmeta);
        $total_product = $productModel->getCountProduct((int)($cate[0]['id']));
        $total_pages = ceil($total_product / 9);
        $products = $productModel->getProductByCategory((int)($cate[0]['id']),$offset,9);
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
        $total_trangsuc = $productModel->getAllWithoutWathch();
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        $data['total_trangsuc'] = $total_trangsuc;
        return view('client/shop',$data);
    }
}