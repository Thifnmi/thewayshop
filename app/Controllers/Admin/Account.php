<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Account extends BaseController
{
    public function index()
    {
        return view('admin/account/index');
        # code...
    }
    public function add()
    {
        return view('admin/account/add');
        # code...
    }
    public function edit()
    {
        return view('admin/account/edit');
        # code...
    }
    public function profile()
    {
        return view('admin/account/profile');
        # code...
    }
    // public function delete()
    // {
    //     return view('admin/account/index');
    //     # code...
    // }
}