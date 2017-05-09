<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\Product;


class ProductsController extends BaseController {


    public function index() {

  
        $objproduct = new Product();

        $products = $objproduct->get_product();


        $data = array(
   
            'products' => $products,
        );
        return view('products.products', $data);
  }

}
