<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\categoryModel;

class Categories extends BaseController
{
    public function index()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $categoryModel = new categoryModel();
        $allCategory = $categoryModel->findAll();
        $data['category'] = $allCategory;
        $data['title'] = 'category';
        echo view('admin/category/index', $data);
    }
    public function add()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $data['title'] = 'Category';
        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getVar('name');
            $image = $this->request->getVar('image');
            $meta_title = $this->request->getVar('meta_title');
            $model = new categoryModel();
            $data_insert = [
                'name' => $name,
                'image' => $image,
                'meta_title' => $meta_title,

            ];
            $model->insert($data_insert);
            return redirect()->to(base_url() . '/admin/categories');
        }
        echo view('admin/category/add', $data);
    }
    public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new categoryModel();
        $item = $model->find($id);
        $data['item'] = $item;
        $data['title'] = 'Category';
        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getVar('name');
            $image = $this->request->getVar('image');
            $meta_title = $this->request->getVar('meta_title');
            $model = new categoryModel();
            $data_update = [
                'name' => $name,
                'image' => $image,
                'meta_title' => $meta_title,

            ];
            $model->update($id, $data_update);
            return redirect()->to(base_url() . '/admin/categories');
        }
        echo view('admin/category/edit', $data);
        //--------------------------------------------------------------------
    }
    public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Model = new categoryModel();
        $Model->where('id', $id)->delete();
        $data['title'] = 'category';
        $data['user'] = $Model->findAll();
        return redirect()->to(base_url() . '/admin/categories');
    }
}
