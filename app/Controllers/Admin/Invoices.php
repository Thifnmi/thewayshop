<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Invoices extends BaseController
{
    public function index()
    {
        return view('admin/invoice/index');
        # code...
    }
    public function add()
    {
        return view('admin/invoice/add');
        # code...
    }
    public function edit()
    {
        return view('admin/invoice/edit');
        # code...
    }
    public function ddetail()
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