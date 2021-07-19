<?php

namespace App\Models;

use CodeIgniter\Model;

class TipeBarangModel extends Model
{
    protected $table = 'tipebarang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tipe'
    ];
    protected $returnType = 'App\Entities\TipeBarang';
    protected $useTimestamps = false;
}