<?php
namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\invoiceDetailModel;
use App\Models\invoiceModel;
use App\Models\productModel;
use App\Models\supplierModel;

class Checkout extends BaseController
{
    public function index()
    {
        session_start();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data['message'] = '';

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
            $productModel = new productModel();
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
            foreach($productname as $index => $value){

                $product_i4 = $productModel->getProductById($productname[$index]);
                if($quantity[$index] >  $product_i4['quantity']){
                    $data['message'] = 'not enough';
                    $data['notify'] = 'Sản phẩm '.$product_i4['product_name'].' không còn đủ số lượng';
                    $data['pid'] = $product_i4['id'];
                    break;
                } else{
                    $data_invoice = [
                        'user_id' => $_SESSION['customer']['user_id'],
                        'fullname' => $fullname,
                        'phone' => $phone,
                        'total_bill' => $sum_prices,
                        'payment_method' => $paymentMethod,
                        'paid_status' => "0",
                        'transporter_id' => $shipping_option,
                        'note' => $note,
                        'bill_address' => $address,
                        'created_by'=> $_SESSION['customer']['username'],
                        'created_on' => date('Y-m-d H:i:s'),
                        'shipping_status' => "0",
                    ];
                    $id = $invoiceModel->insert($data_invoice);
                    foreach($productname as $index => $value){
                        $data_invoiceDetail = [
                            'invoice_id' => $id,
                            'product_id' => $productname[$index],
                            'product_price' => $prices[$index],
                            'product_amount' => $quantity[$index],
                            'total_price' => $total_prices[$index]
                        ];
                        $product_i4 = $productModel->getProductById($productname[$index]);
                        $data_product = [
                            'quantity'=> $product_i4['quantity'] - $quantity[$index],
                        ];
                        // var_dump($data_product);
                        // die();
                        $productModel->update($productname[$index],$data_product);
                        // var_dump($data_invoiceDetail);
                        $orderDetail = $invoiceDetailModel->insert($data_invoiceDetail);
                    }
                    if($orderDetail > 0){
                        $data['message'] = 'success';
                        return view('client/checkout',$data);
                    } else{
                        $data['message'] = 'fail';
                        return view('client/checkout',$data);
                    }
                }
                return view('client/cart',$data);
            }
            // var_dump($data_invoice);
            // die();
            return view('client/checkout', $data);
        }
        return view('client/checkout',$data);
    }
    public function cancel()
    {
        session_start();
        $id = $_GET['id'];
        $invoiceModel = new invoiceModel();
        $invoiceDetailModel = new invoiceDetailModel();
        $productModel = new productModel();

        $invoiceDetail = $invoiceDetailModel->getInvoiceDetailByID($id);
        $invoice = $invoiceModel->getInvoiceById($id);

        foreach($invoiceDetail as $pro){
            $product_i4 = $productModel->getProductById($pro['product_id']);
            $data_product=[
                'quantity' => $product_i4['quantity'] + $pro['product_amount'],
            ];
            $productModel->update($pro['product_id'],$data_product);
        }

        $data_shipping_status = [
            'shipping_status' => "4",
        ];
        $invoiceModel->update($id,$data_shipping_status);
        return redirect()->to(base_url()."/Bought");
    }
}