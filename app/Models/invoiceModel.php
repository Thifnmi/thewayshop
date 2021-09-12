<?php

namespace App\Models;

use CodeIgniter\Model;

class invoiceModel extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'user_id', 'fullname', 'phone', 'email', 'paid_status', 'note', 'created_by', 'created_on', 'shipping_status', 'bill_address'];

    public function getAllInvoice()
    {
        return $this->findAll();
        # code...
    }
    public function getInvoiceById(int $Oid)
    {
        return $this->find($Oid);
        # code...
    }
}
