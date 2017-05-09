<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Content extends Model {

    protected $table = 'content';
    public $timestamps = false;
    protected $fillable = [
        'content_title',
        'content_list'
    ];
    protected $primaryKey = 'content_id';

    public function get_content() {

        $contents = self::all();

        return $contents;
    }

    public function add_test($input) {

        $content = self::create([
                    'content_title' => $input['content_title'],
                    'content_list' => $input['content_list'],
        ]);

        return $content;
    }

}
