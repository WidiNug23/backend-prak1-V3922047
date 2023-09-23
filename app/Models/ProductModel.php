<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_product', 'description'];

    public function insertProduct($data){
        return $this->insert($data);
    }
}
