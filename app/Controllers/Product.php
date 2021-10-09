<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\imageModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Product extends BaseController
{
    public function index(int $pid)
    {
        session_start();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $productModel = new productModel();
        $product = $productModel->getProductById($pid);
        $featuredProducts = $productModel->getProductByCategory($product['category_id'],0,10);
        $data['product'] = $product;
        $data['featuredProducts'] = $featuredProducts;
        $imageModel = new imageModel();
        $productImage = $imageModel->getImagesByProductId($pid);
        $data['productImage'] = $productImage;
        return view('client/shop-detail',$data);
    }
    public function material()
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
        $products = $productModel->getProductbyMaterial($key, $offset,9);
        $total_product = count($productModel->countProductGetByMaterial($key));
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
    public function collection()
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
        $products = $productModel->getProductbyCollection($key, $offset,9);
        $total_product = count($productModel->countProductGetByCollection($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function brands()
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
        $products = $productModel->getProductbyBrands($key, $offset,9);
        $total_product = count($productModel->countProductGetByBrands($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function gender()
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
        $products = $productModel->getProductbyGender($key, $offset,9);
        $total_product = count($productModel->countProductGetByGender($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function wire_material()
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
        $products = $productModel->getProductbyWireMaterial($key, $offset,9);
        $total_product = count($productModel->countProductGetByWireMaterial($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function style()
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
        $products = $productModel->getProductbyStyle($key, $offset,9);
        $total_product = count($productModel->countProductGetByStyle($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function brandsForWatch()
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
        $products = $productModel->getProductbyBrandsForWatch($key, $offset,9);
        $total_product = count($productModel->countProductGetByBrandsForWatch($key));
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
        $data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
        $data['products'] = $products;
        $data['key'] = $key;
        $data['sortKey'] = $sortKey;
        return view('client/shop', $data);
    }
    public function getById()
    {
        if (isset($_GET['pid'])) {
            $pid = $_GET['pid'];
            $productModel = new productModel();
            $product_info = $productModel->getProductById($pid);
            header('Content-Type: application/json');
            return json_encode(['status' => 200, 'data' => $product_info]);
        }
        return json_encode(['status' => 400, 'data' => null]);
    }
}