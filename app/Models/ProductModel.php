<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_product', 'description'];



    public function insertProductORM($data){
        $this->insert($data);
    }

    public function getAllProducts(){
        return $this->findAll();
    }

    public function getProduct($id){
        $product = $this->product->where("id", $id)->first();
        $data = [
            'product' => $product
        ];
        return view('product_detail', $data);
    }
}
