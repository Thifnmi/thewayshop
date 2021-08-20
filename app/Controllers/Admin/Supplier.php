<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\supplierModel;

class Supplier extends BaseController
{
    public function index()
    {
        $data['title'] = 'supplier';
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $model = new supplierModel();
        $data['supplier'] = $model->findAll();
        echo view('admin/supplier/index', $data);
    }
    public function add()
    {
        $data['title'] = 'supplier';
        $model = new supplierModel();
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getVar('name');
            $email = $this->request->getVar('email');
            $data_insert = [
                'name' => $name,
                'email' => $email,
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url() . '/admin/supplier');
        }
        return view('admin/supplier/add', $data);
    }
    public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new supplierModel();
        $detail = $model->find($id);
        $data['supplier'] = $detail;
        $data['title'] = 'supplier';
        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getVar('name');
            $email = $this->request->getVar('email');
            $data_insert = [
                'name' => $name,
                'email' => $email,
            ];
            $model->update($id, $data_insert);
            return redirect()->to(base_url() . '/admin/supplier');
        }
        return view('admin/supplier/edit', $data);
    }
    public function detail()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new supplierModel();
        $save = $model->find($id);
        $data['info'] = $save;
        return view('admin/supplier/detail', $data);
    }
    public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new supplierModel();
        $model->delete($id);
        return redirect()->to(base_url() . '/admin/supplier');
    }
}
