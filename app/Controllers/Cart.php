<?php
namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\supplierModel;

class Cart extends BaseController
{
    public function index()
    {
        session_start();

        // if (empty($_SESSION['customer']))
		// {
        //     return redirect()->to(base_url().'/Login');
        // }
        
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        return view('client/cart',$data);
    }
}