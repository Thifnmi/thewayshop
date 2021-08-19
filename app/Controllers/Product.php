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
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $productModel = new productModel();
        $product = $productModel->getProductById($pid);
        $featuredProducts = $productModel->getProductByCategory($product['category_id'],0,6);
        $data['product'] = $product;
        $data['featuredProducts'] = $featuredProducts;
        $imageModel = new imageModel();
        $productImage = $imageModel->getImagesByProductId($pid);
        $data['productImage'] = $productImage;
        return view('client/shop-detail',$data);
    }
}