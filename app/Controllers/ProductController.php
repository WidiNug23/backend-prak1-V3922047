<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController {
    protected $product;

    public function __construct() {
        $this->product = new ProductModel();
    }
    
    public function insertProduct() {
        $data = [
            'id' => 12345,
            'nama_product' => 'laptop',
            'description' => 'bagus sekali'
        ];
        $this->product->insertProduct($data);
    }

    public function readProduct(){
        $products = $this->product->findAll();
        $data = [
            'products' => $products
        ];

        return view('product', $data);
    }
}
