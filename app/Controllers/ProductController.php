<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'All Products'
        ];
        return view('pages/products/all-product', $data);
    }

    // product category
    public function category_product()
    {
        $data = [
            'title' => 'Product Category'
        ];
        return view('pages/products/product-category', $data);
    }
}
