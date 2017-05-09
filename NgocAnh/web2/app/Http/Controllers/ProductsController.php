<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\Shop;
use App\Http\Models\Product;

class ProductsController extends BaseController {

//    private $objform;

//    private $object;
//    private $objectft;

    private $objshop;
    private $objproduct;
//
    public function index() {
  $objshop = new Shop();
  $shops = $objshop->get_shop();
        $objproduct = new Product();
        $products = $objproduct->get_product();
        $data = array(
       'shops' => $shops,
              'products' => $products,
        );
        return view('trangchu.products', $data);
         
    }

}
