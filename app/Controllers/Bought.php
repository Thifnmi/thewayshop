<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\invoiceDetailModel;
use App\Models\invoiceModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Bought extends BaseController
{
    public function index()
    {
        session_start();
        if (empty($_SESSION['customer'])) {
            return redirect()->to(base_url() . '/Login');
        }
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
        $categories = $categoryModel->getAllcategory();
        $data['categories'] = $categories;
        $boughtModel = new invoiceModel();
        $bought = $boughtModel->getInvoiceByUserId($_SESSION['customer']['user_id']);
        $data['bought'] = $bought;
        $invoiceDetailModel = new invoiceDetailModel();
        $details = [];
        $productModel = new productModel();
        $products = [];
        foreach ($bought as $item) {
            $invoiceDetail = $invoiceDetailModel->getInvoiceDetailByID($item['id']);
            foreach ($invoiceDetail as $sp) {
                $product = $productModel->getProductById($sp['product_id']);
                $products = array_merge($products, $product);
            }

            $details = array_merge($details, $invoiceDetail);
        }
        $data['invoiceDetails'] = $details;
        $data['products'] = $products;
        var_dump($products, $details);
        die;

        return view('client/bought', $data);
        # code...
    }
}
