<?php

namespace App\Controllers;

use App\Models\categoryModel;

class About extends BaseController
{
	public function index()
	{
		session_start();
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
		return view('client/about',$data);
	}
}
