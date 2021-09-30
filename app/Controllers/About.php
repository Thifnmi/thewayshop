<?php

namespace App\Controllers;

use App\Models\categoryModel;
use App\Models\supplierModel;

class About extends BaseController
{
	public function index()
	{
		session_start();
        $supplierModel = new supplierModel();
        $data['supplier'] = $supplierModel->getAllSupplier();
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
		return view('client/about',$data);
	}
}
