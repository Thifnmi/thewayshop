<?php

namespace App\Models;

use CodeIgniter\Model;

class productmodel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'category_id', 'supplier_id', 'product_name', 'price', 'product_code', 'image','description','quantity'];

    public function getProductById(int $id)
    {
        return $this->find($id);
    }
}