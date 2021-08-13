<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Categories extends BaseController
{
    public function index()
    {
        return view('admin/category/index');
        # code...
    }
    public function add()
    {
        return view('admin/category/add');
        # code...
    }
    public function edit()
    {
        return view('admin/category/edit');
        # code...
    }
    // public function delete()
    // {
    //     return view('admin/account/index');
    //     # code...
    // }
}