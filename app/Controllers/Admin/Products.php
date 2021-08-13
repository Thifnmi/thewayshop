<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        return view('admin/product/index');
        # code...
    }
    public function add()
    {
        return view('admin/product/add');
        # code...
    }
    public function edit()
    {
        return view('admin/product/edit');
        # code...
    }
    public function detail()
    {
        return view('admin/product/detail');
        # code...
    }
    // public function delete()
    // {
    //     return view('admin/account/index');
    //     # code...
    // }
}