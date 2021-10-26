<?php
namespace App\Controllers;


class logout extends BaseController
{
    public function index()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url());
    }
}