<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'BgclistController@index');//削除ボタン追加
Route::get('top', 'BgclistController@index');
Route::get('bgcadd', 'BgclistController@add');//bgcadd 名刺追加
Route::post('bgccheck', 'BgclistController@addcheck');//bgcadd 名刺追加確認
Route::post('bgccreate', 'BgclistController@create');//名刺追加実行
Route::get('bgcedit', 'BgclistController@edit');//名刺編集
Route::post('bgcupdate', 'BgclistController@update');//名刺編集保存
//Route::get('bgcdetail', 'BgclistController@detail');//

Route::get('companieslist', 'CompaniesController@index');//削除ボタン追加
Route::get('companyadd', 'CompaniesController@add');
Route::post('companycheck', 'CompaniesController@addcheck');
Route::post('companycreate', 'CompaniesController@create');
Route::get('companydetail', 'CompaniesController@detail');
Route::post('companyedit',  'CompaniesController@edit');
Route::get('companyedit',  'CompaniesController@edit');//バリデートで戻った時
Route::post('companyupdate',  'CompaniesController@update');
Route::get('companyremove',  'CompaniesController@remove');

