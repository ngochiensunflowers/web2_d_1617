<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Descrip extends Model {

    protected $table = 'descrip';
    public $timestamps = false;
    protected $fillable = [
        'desc_title',
        'desc_heading',
        'desc_images'
    ];
    protected $primaryKey = 'desc_id';

    public function get_desc() {

        $descs = self::all();

        return $descs;
    }

    public function add_test($input) {

        $descs = self::create([
                    'desc_title' => $input['desc_title'],
                    'desc_heading' => $input['desc_heading'],
                    'desc_images' => $input['desc_images'],
                    
        ]);

        return $descs;
    }

}
