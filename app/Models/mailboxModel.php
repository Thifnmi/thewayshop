<?php

namespace App\Models;

use CodeIgniter\Model;

class mailboxModel extends Model
{
    protected $table      = 'mailbox';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'fullname', 'phone', 'email', 'content', 'status', 'created_on'];
}
