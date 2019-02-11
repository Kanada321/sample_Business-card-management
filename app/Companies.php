<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'unique:companies|required', //varchar(50) not null,
        'name_kana'  => 'max:50', //varchar(50),
        'mame_english'  => 'alpha_num', //varchar(50),
        'address'  => 'max:50', //varchar(50),
        'address_kana'  => 'max:150', //varchar(150),
        'address_english'  => 'max:150', //varchar(50),
        'postal_code'  => 'max:8', //varchar(50),
        'tel'  => 'max:12', //varchar(50),
        'fax'  => 'max:12', //varchar(50),
        'comment'  => 'max:250', //text,
        //'creat_user_id'  => 'required', //int unsigned,
        //'update_user_id'  => 'required', //int unsigned,
    );
}
