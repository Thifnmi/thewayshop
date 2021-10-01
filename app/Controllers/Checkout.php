<?php
namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\invoiceDetailModel;
use App\Models\invoiceModel;
use App\Models\supplierModel;

class Checkout extends BaseController
{
    public function index()
    {
        session_start();

        if (empty($_SESSION['customer']))
		{
            return redirect()->to(base_url().'/Login');
        }
        
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        if($this->request->getMethod() == 'post'){
            $invoiceModel = new invoiceModel();
            $invoiceDetailModel = new invoiceDetailModel();
            $fullname = $this->request->getVar('lastName') . $this->request->getVar('firstName');
            $username = $this->request->getVar('username');
            $phone = $this->request->getvar('phone');
            $address = $this->request->getvar('address');
            $note = $this->request->getvar('note');
            $paymentMethod = $this->request->getvar('paymentMethod');
            $shipping_option = $this->request->getvar('shipping-option');
            $productname = $this->request->getvar('productname');
            $prices = $this->request->getvar('prices');
            $quantity = $this->request->getvar('quantity');
            $total_prices = $this->request->getvar('total-prices');
            $sum_prices = $this->request->getvar('sum-prices');
            $data_invoice = [
                'user_id' => $_SESSION['customer']['user_id'],
                'fullname' => $fullname,
                'phone' => $phone,
                'total_bill' => $sum_prices,
                'payment_method' => $paymentMethod,
                'paid_status' => "0",
                'transporter_id' => "1",
                'note' => $note,
                'bill_address' => $address,
                'created_by'=> $_SESSION['customer']['username'],
                'created_on' => date('Y-m-d H:m:s'),
                'shipping_status' => "0",
                'status' => "0",
            ];
            $id = $invoiceModel->insert($data_invoice);
            // $id = 10;
            foreach($productname as $index => $value){
                $data_invoiceDetail = [
                    'invoice_id' => $id,
                    'product_id' => $productname[$index],
                    'product_price' => $prices[$index],
                    'product_amount' => $quantity[$index],
                    'total_price' => $total_prices[$index]
                ];
                // var_dump($data_invoiceDetail);
                $invoiceDetailModel->insert($data_invoiceDetail);
            }
            // var_dump($data_invoice);
            die();
        }
        return view('client/checkout',$data);
    }
}