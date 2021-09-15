<?php
namespace App\Models;

use CodeIgniter\Model;

class accountsModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'user_id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'username', 'password'];

    public function checkUsername(string $username)
    {
        return $this->find($username);
        # code...
    }
}