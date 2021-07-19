<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryId = 'id';
    protected $allowedFields = ['username', 'password', 'salt', 'avatar', 'role', 'created_by', 'created_date', 'updated_by', 'updated_date'];
    protected $returnType = 'App\Entities\User';
    protected $useTimeStamps = False;
}