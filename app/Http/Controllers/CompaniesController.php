<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function index()
    {
        /* 会社一覧　*/
        $items = Companies::orderBy('id','asc')->simplePaginate(5);
        return view('bgc.companieslist',['items' => $items]);
    }

    public function add()
    {
     /*get：会社新規登録入力画面*/

     return view('bgc.companiesadd');
    }

    public function update()
    {
        /*get：会社新規登録入力画面*/

        return view('bgc.companiesadd');
    }

    public function addcheck(Request $request)
    {
        /*post：入力確認画面*/
        $this->validate($request, Companies::$rules);
        $input = $request->all();
        unset($input['_token']);
        $param = ['input' => $input];
        return view('bgc.companiesaddCheck', $param);
    }

    public function create(Request $request)
    {
        /*postで限定：inserして一覧画面へ移動*/
        $companies = new Companies;
        $from = $request->all();
        unset($from['_token']);
        $companies->fill($from)->save();
        echo "OK";
    }

    public function detail(Request $request){
        /*会社の詳細情報表示*/
        $items = Companies::where('id', $request->id)->first();
        return view('bgc.companydetail',['items' => $items]);

    }
}
