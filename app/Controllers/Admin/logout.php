<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class logout extends BaseController
{
    public function index()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url() . '/admin/Login');
    }
}
