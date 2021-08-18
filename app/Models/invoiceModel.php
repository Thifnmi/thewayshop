<?php

namespace App\Models;

use CodeIgniter\Model;

class invoiceModel extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'user_id', 'fullname', 'phone', 'email', 'paid_status', 'note', 'create_on', 'shipping_status', 'bill_address'];
}
