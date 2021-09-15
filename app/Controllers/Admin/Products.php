<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\imageModel;
use App\Models\productModel;

class Products extends BaseController
{
    public function index()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $adminModel = new productModel();

        $data['title'] = 'product';
        $data['user'] = $adminModel->findAll();
        echo view('admin/product/index', $data);
    }
    public function add()
    {
        session_start();

        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $data['title'] = 'product';
        if ($this->request->getMethod() == 'post') {
            $model = new productModel();
            $product_name = $this->request->getVar('product_name');
            $price = $this->request->getVar('price');
            $quantity = $this->request->getVar('quantity');
            $product_code = $this->request->getVar('code');
            $category = $this->request->getVar('category');
            $gender = $this->request->getVar('gender');
            $collection = $this->request->getVar('collection');
            $main_stone_type = $this->request->getVar('main_stone_type');
            $supplier_id = $this->request->getVar('provider');
            $path = $this->request->getFile('fileToUpload');

            if ($path != '') {
                $newName = $path->getRandomName();
                $path = $path->move("./public/admin/assets/images/products/", $newName);
            }


            // $url = base_url() . "/public/admin/assets/images/products/" . $newName;
            // echo $url_thumnail;
            // die();
            // $desc_key = $this->request->getVar('name');
            // $desc_value = $this->request->getVar('value');
            // $description = [];
            // for ($i = 0; $i < count($desc_key); $i++) {
            //     array_push($description, $desc_key[$i] . ':' . $desc_value[$i]);
            // }
            // $description = join('|', $description);
            $insert_product = [
                'category_id' => $category,
                'supplier_id' => $supplier_id,
                'product_name' => $product_name,
                'quantity' => $quantity,
                'gender' => $gender,
                'collection' => $collection,
                'main_stone_type' => $main_stone_type,
                'image' => $path,
                'price' => $price,
                'productCode' => $product_code,
            ];
            $model->save($insert_product);

            $getarrayid = $model->getMaxId();
            $id = $getarrayid[0]['id'];
            // var_dump($insert_product);
            // echo $id;
            // die();
            $model_image = new imageModel();
            $ima = [
                'product_id' => $id,
                'url' => $path,
            ];
            $model_image->save($ima);
            if ($imagefile = $this->request->getFiles()) {
                foreach ($imagefile['image_more'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $newName = $img->getRandomName();
                        $img->move("./public/admin/assets/images/products/", $newName);
                        $url = base_url() . '/public/admin/assets/images/products/' . $newName;
                        $data_image = [
                            'product_id' => $id,
                            'url' => $url,
                        ];
                        $model_image->insert($data_image);
                    }
                }
            }
            return redirect()->to(base_url() . '/admin/products');
        }
        echo view('admin/product/add', $data);
    }
    public function edit()
    {
        $id = $_GET['id'];
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
       
        $model = new productModel();
        $data['product'] = $model->find($id);
        $data['title'] = 'product';
        if ($this->request->getMethod() == 'post') {
            $product_name = $this->request->getVar('product_name');
            $price = $this->request->getVar('price');
            $quantity = $this->request->getVar('quantity');
            $product_code = $this->request->getVar('code');
            $category = $this->request->getVar('category');
            $gender = $this->request->getVar('gender');
            $collection = $this->request->getVar('collection');
            $main_stone_type = $this->request->getVar('main_stone_type');
            $supplier_id = $this->request->getVar('provider');
            $path = $this->request->getFile('fileToUpload');

            if ($path != '') {
                $newName = $path->getRandomName();
                $path = $path->move("./public/client/assets/product/", $newName);
            }
            $url = base_url() . "/public/client/assets/product/" . $newName;
            
            $insert_product = [
                'category_id' => $category,
                'supplier_id' => $supplier_id,
                'product_name' => $product_name,
                'quantity' => $quantity,
                'gender' => $gender,
                'collection' => $collection,
                'main_stone_type' => $main_stone_type,
                'image' => $url,
                'price' => $price,
                'productCode' => $product_code,
            ];
            $model->save($insert_product);

            $getarrayid = $model->getMaxId();
            $id = $getarrayid[0]['id'];
            $model_image = new imageModel();
            $ima = [
                'product_id' => $id,
                'url' => $url,
            ];
            $model_image->save($ima);
            if ($imagefile = $this->request->getFiles()) {
                foreach ($imagefile['image_more'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $newName = $img->getRandomName();
                        $img->move("./public/admin/assets/product/", $newName);
                        $url = base_url() . '/public/admin/assets/product/' . $newName;
                        $data_image = [
                            'product_id' => $id,
                            'url' => $url,
                        ];
                        $model_image->insert($data_image);
                    }
                }
            }
            return redirect()->to(base_url() . '/admin/products');
        }
        echo view('admin/product/edit', $data);
    }
    public function delete()
    {
        session_start();

        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Model = new productModel();
        $Model->where('id', $id)->delete();
        $data['title'] = 'id';
        $data['user'] = $Model->findAll();
        return redirect()->to(base_url() . '/admin/products');
    }

    public function detail()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Model = new ProductModel();
        $product = $Model->find($id);
        $image_model = new imageModel();
        $images = $image_model->getImagesByProductId($id);
        $data['title'] = 'product_detail';
        $data['product'] = $product;
        $data['images'] = $images;
        return view('admin/product/detail', $data);
    }
}
