<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Mailbox extends BaseController
{
    public function index()
    {
        return view('admin/mailbox');
        # code...
    }
    public function detail()
    {
        return view('admin/mail_detail');
        # code...
    }
}