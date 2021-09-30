<?php
namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\supplierModel;

class Checkout extends BaseController
{
    public function index()
    {
        session_start();

        if (empty($_SESSION['customer']))
		{
            return redirect()->to(base_url().'/Login');
        }
        
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
        $categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
        if($this->request->getMethod() == 'post'){
            
        }
        return view('client/checkout',$data);
        # code...
    }
}