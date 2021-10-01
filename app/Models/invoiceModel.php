<?php

namespace App\Models;

use CodeIgniter\Model;

class invoiceModel extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'user_id', 'fullname', 'phone', 'email', 'total_bill', 'payment_method', 'transporter_id', 'paid_status', 'note', 'shipping_status', 'bill_address', 'status', 'created_by', 'created_on'];

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
    public function getInvoiceByUserId(int $UserId)
    {
        return $this->where('user_id', $UserId)->findAll();
    }
}
