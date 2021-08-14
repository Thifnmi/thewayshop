<?php

namespace App\Models;

use CodeIgniter\Model;

class productModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'category_id', 'supplier_id', 'product_name', 'price', 'product_code', 'image','description','quantity'];

    public function getProductById(int $id)
    {
        return $this->find($id);
    }

    public function getProductByCategory(int $cid, int $offset, int $recors_per_page)
    {
        return $this->where('category_id' ,$cid)->orderby('id','desc')->findAll($recors_per_page, $offset);
        # code...
    }
    public function getCountProduct(int $cid)
    {
        return $this->where('category_id', $cid)->countAllResults();
        # code...
    }
    public function getShowProduct(int $cid)
    {
        return $this->where('category_id', $cid)->findAll();
        # code...
    }
}