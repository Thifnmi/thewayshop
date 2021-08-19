<?php

namespace App\Models;

use CodeIgniter\Model;

class invoiceDetailModel extends Model
{
    protected $table = 'invoice_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'invoice_id', 'product_id', 'product_amount', 'product_price', 'total_price'];
}
