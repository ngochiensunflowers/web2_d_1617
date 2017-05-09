<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Shop extends Model {

    protected $table = 'shop';
    public $timestamps = false;
    protected $fillable = [
        'cate',
        'img'
    ];
    protected $primaryKey = 'id';

    public function get_shop() {

        $shops = self::all();

        return $shops;
    }

    public function add_test($input) {

        $shop = self::create([
                    'cate' => $input['cate'],
                    'img' => $input['img'],
        ]);

        return $shop;
    }

}
