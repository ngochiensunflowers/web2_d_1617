<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Sliderproduct extends Model {

    protected $table = 'sliderproduct';
    public $timestamps = false;
    protected $fillable = [
        'slider_title',
        'slider_heading',
        'slider_images'
    ];
    protected $primaryKey = 'slider_id';

    public function get_slider() {

        $sliders = self::all();

        return $sliders;
    }

    public function add_test($input) {

        $sliders = self::create([
                    'slider_title' => $input['slider_title'],
                    'slider_heading' => $input['slider_heading'],
                    'slider_images' => $input['slider_images'],
                    
        ]);

        return $sliders;
    }

}
