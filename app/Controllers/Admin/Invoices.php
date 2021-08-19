<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\invoiceDetailModel;
use App\Models\invoiceModel;
use App\Models\productModel;

class Invoices extends BaseController
{
    public function index()
    {
        $data['title'] = 'invoice';
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $model = new invoiceModel();
        $all_orders = $model->findAll();
        $data['orders'] = $all_orders;
        echo view('admin/invoice/index', $data);
        //--------------------------------------------------------------------
    }
    public function add()
    {
        session_start();
        $model = new invoiceModel();
        $product_model = new productModel();
        $invoiceDetailModel = new invoiceDetailModel();
        if ($this->request->getMethod() == 'post') {
            $fullname = $this->request->getVar('fullname');
            $phone = $this->request->getVar('phone');
            $email = $this->request->getVar('email');
            $bill_address = $this->request->getVar('bill_address');
            $note = $this->request->getVar('note');
            $paid_status = $this->request->getVar('paid_status');
            $data_insert = [
                'fullname' => $fullname,
                'phone' => $phone,
                'email' => $email,
                'bill_address' => $bill_address,
                'note' => $note,
                'paid_status' => (int)$paid_status,
                'create_on' => date("Y-m-d"),
                'shipping_status' => 0,
                
            ];
            // var_dump($data_insert);
            $product_var = $this->request->getVar('name[]');
            $product_amount = $this->request->getVar('value[]');
            $id = $model->insert($data_insert);
            echo $id;
            for ($i = 0; $i < count($product_var); $i++) {
                // echo $product_var[$i].'  ';
                // echo $product_amount[$i].'\n';
                $price = str_replace(".", "", $product_model->find($product_var[$i])['price']);
                $total = (int)$price * (int) $product_amount[$i];
                // echo $total;
                $data_order_insert = [
                    'invoice_id' => $id,
                    'product_id' => (int) $product_var[$i],
                    'total_price' => (int) $total,
                    'product_amount' => (int) $product_amount[$i]
                ];
                var_dump($data_order_insert);
                $invoiceDetailModel->insert($data_order_insert);
            }
            return redirect()->to(base_url() . '/admin/invoices');
        }
        $data['title'] = 'invoice';
        $data['product'] = $product_model->findAll();
        echo view('admin/invoice/add', $data);
    }
    public function edit()
    {
        return view('admin/invoice/edit');
    }
    public function detail()
    {
        return view('admin/invoice/detail');
        # code...
    }
    // public function delete()
    // {
    //     return view('admin/account/index');
    //     # code...
    // }
}
