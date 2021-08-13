<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Supplier extends BaseController
{
    public function index()
    {
        return view('admin/supplier/index');
        # code...
    }
    public function add()
    {
        return view('admin/supplier/add');
        # code...
    }
    public function edit()
    {
        return view('admin/supplier/edit');
        # code...
    }
    public function detail()
    {
        return view('admin/supplier/detail');
        # code...
    }
    // public function delete()
    // {
    //     return view('admin/account/index');
    //     # code...
    // }
}