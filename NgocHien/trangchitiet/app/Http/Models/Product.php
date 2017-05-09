<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Product extends Model {

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'img',
        'description'
    ];
    protected $primaryKey = 'id';

    public function get_product() {

        $products = self::all();

        return $products;
    }

    public function add_test($input) {

        $product = self::create([
                    'name' => $input['name'],
                    'price' => $input['price'],
                    'img' => $input['img'],
                    'description' => $input['description']
        ]);

        return $product;
    }

}
