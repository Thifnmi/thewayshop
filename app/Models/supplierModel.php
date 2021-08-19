<?php

namespace App\Models;

use CodeIgniter\Model;

class supplierModel extends Model
{
    protected $table      = 'supplier';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'name'];
  
    public function getAllSupplier()
    {
        return $this->findAll();
    }
}