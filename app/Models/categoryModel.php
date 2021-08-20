<?php

namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'name', 'url','meta_title'];

    public function getAllcategory()
    {
        return $this->findAll();
    }

    public function getCategoryIdByMetalTitle(string $cmeta)
    {
        return $this->where('meta_title', $cmeta)->find();
        # code...
    }
}
