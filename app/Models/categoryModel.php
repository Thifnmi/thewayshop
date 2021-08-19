<?php

namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'name', 'url'];

    public function getAllcategory()
    {
        return $this->findAll();
    }
}
