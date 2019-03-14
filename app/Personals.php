<?php
/*名刺データ、個人の情報テーブル、Personalsのもmodel*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Personals extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'companies_id' => 'required',
        'department' => 'max:50',
        'position' => 'max:50',
        'name' => 'required',
        'name_kana' => 'max:50',
        'email' => 'email',
        'tel' =>  'filled | numeric | digits_between:8,11',
        'mobile' =>  'numeric | digits_between:8,11',
        'comment' => 'max:250',
        'imgname' =>  'max:50',
        'responsible_user_id' => 'max:50',
    );

    public static $rules_1 = array(
        'companies_id' => 'required',
        'department' => 'max:50',
        'position' => 'max:50',
        'name' => 'required',
        'name_kana' => 'max:50',
        'comment' => 'max:250',
        'imgname' =>  'max:50',
        'responsible_user_id' => 'max:50',
    );

    public static $rules_email = array(
        'email' => 'email',
    );
    public static $rules_tel = array(
        'tel' =>  'filled | numeric | digits_between:8,11',
    );
    public static $rules_mobile = array(
        'mobile' =>  'numeric | digits_between:8,11',
    );

    public static $messages = array(
            'name.required' => '名前は必ず入力してください！。',
    );

    public function companies()
    {
        /*hasOneで会社テーブルとリレーションする*/
        return $this->hasOne('App\Companies', 'id','companies_id');
    }
}
