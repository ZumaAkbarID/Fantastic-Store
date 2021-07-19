<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Barang extends Entity
{
    public function setGambar($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './uploads/barang/img';
        $file->move($writePath, $fileName);
        $this->attributes['gambar'] = $fileName;
        return $this;
    }
}