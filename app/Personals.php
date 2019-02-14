<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personals extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'unique:posts|required', //varchar(50) not null,
        'name_kana'  => 'max50', //varchar(50),
        'mame_english'  => 'alpha_num', //varchar(50),
        'adress'  => 'required', //varchar(50),
        'adress_kana'  => 'required', //varchar(150),
        'adress_english'  => 'required', //varchar(50),
        'postal_code'  => 'required', //varchar(50),
        'tell'  => 'required', //varchar(50),
        'fax'  => 'required', //varchar(50),
        'comment'  => 'required', //text,
        'creat_user_id'  => 'required', //int unsigned,
        'update_user_id'  => 'required', //int unsigned,
    );

    public function companies()
    {
        return $this->hasOne('App\Companies', 'id','companies_id');
    }
}
