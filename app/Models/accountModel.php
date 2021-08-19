<?php
namespace App\Models;

use CodeIgniter\Model;

class accountModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'username', 'fullname', 'password', 'image', 'gender', 'birthday', 'address', 'email', 'facebook'];

    public function getAccountById(int $id)
    {
        return $this->find($id);
    }

    public function checkUsername(string $username)
    {
        return $this->where('username',$username)->find();
    }
    public function getAllAccount()
    {
        return $this->findAll();
    }

}