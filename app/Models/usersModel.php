<?php
namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'fullname', 'image', 'gender','role_id', 'birthday', 'address', 'email', 'facebook','phone_number'];

    public function getUserById(int $id)
    {
        return $this->find($id);
    }
    public function getAllUsers()
    {
        return $this->findAll();
    }

}