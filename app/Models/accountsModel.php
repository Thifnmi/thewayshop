<?php
namespace App\Models;

use CodeIgniter\Model;

class accountsModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'user_id';

    protected $returnType     = 'array';
    protected $allowedFields = ['user_id', 'username', 'password'];

    public function checkUsername(string $username)
    {
        return $this->where('username', $username)->findAll();
        # code...
    }
    public function getAccountById(int $id)
    {
        return $this->find($id);
    }
}