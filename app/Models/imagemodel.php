<?php

namespace App\Models;

use CodeIgniter\Model;

class imageModel extends Model
{
    protected $table      = 'images';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'product_id', 'url'];
    
    public function getImagesByProductId($pid)
    {
        return $this->where('product_id', $pid)->findAll();
    }
}