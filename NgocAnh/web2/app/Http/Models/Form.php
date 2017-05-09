<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Form extends Model {

    protected $table = 'form';
    public $timestamps = false;
    protected $fillable = [
        'form_your',
        'form_name',
        'form_mail'
    ];
    protected $primaryKey = 'form_id';

    public function add_test($input) {

        $forms = self::create([
                    'form_your' => $input['form_your'],
                    'form_name' => $input['form_name'],
                    'form_mail' => $input['form_mail'],
        ]);

        return $forms;
    }

}
