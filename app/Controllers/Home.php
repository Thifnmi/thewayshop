<?php

namespace App\Controllers;

use App\Models\categoryModel;

class Home extends BaseController
{
	public function index()
	{
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
		return view('client/index', $data);
	}
}
