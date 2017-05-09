<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Ourprice extends Model {

    protected $table = 'our';
    public $timestamps = false;
    protected $fillable = [
        'our_title',
        'our_heading',
        'our_rity',
        'our_cat',
        'our_share'
    ];
    protected $primaryKey = 'our_id';

    public function get_our() {

        $ours = self::all();

        return $ours;
    }

    public function add_test($input) {

        $ours = self::create([
                    'our_title' => $input['our_title'],
                    'our_heading' => $input['our_heading'],
                    'our_rity' => $input['our_rity'],
                    'our_cat' => $input['our_cat'],
                    'our_share' => $input['our_share'],
                    
        ]);

        return $ours;
    }

}
