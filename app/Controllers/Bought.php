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
        $data['bought'] = array_reverse($bought, true);
        $invoiceDetailModel = new invoiceDetailModel();
        $details = [];
        $productModel = new productModel();
        $products_raw = [];
        $invoiceDetail['product'] = [];
        foreach ($bought as $item) {
            $invoiceDetail = $invoiceDetailModel->getInvoiceDetailByID($item['id']);
            foreach ($invoiceDetail as $sp) {
                $product = $productModel->getProductsById($sp['product_id']);
                $products_raw = array_merge($products_raw, $product);
            }
            $details = array_merge($details, $invoiceDetail);
        }
        $products = array_unique($products_raw,SORT_REGULAR);
        // var_dump(array_reverse($products, true));
        $data['invoiceDetails'] = array_reverse($details, true);
        $data['products'] = array_reverse($products, true);
        // die;

        return view('client/bought', $data);
    }
}
