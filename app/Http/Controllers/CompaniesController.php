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

     return view('bgc.companyadd');
    }

    public function edit(Request $request)
    {
        /*post：会社編集画面*/
        if( $request->session()->get('errors')){
            $items = (object)[];
            $old_ar = $request->session()->get('_old_input');
            foreach($old_ar as $key => $old){
                $items->$key = $old;
            }
        }else{
            $items = Companies::where('id', $request->id)->first();
        }
        return view('bgc.companyedit',['items' => $items]);
    }

    public function update(Request $request){
        /*post：update実行メソッド*/
        $this->validate($request, Companies::up_rules($request->id));
        $companies = Companies::find($request->id);
        $from = $request->all();
        unset($from['_token']);
        $companies->fill($from)->save();
        $request->session()->flash('flash_message', '　<span class="small text-muted">更新しました。</span>');
        return redirect('companydetail?id='.$request->id);

    }

    public function addcheck(Request $request)
    {
        /*post：入力確認画面*/
        $this->validate($request, Companies::$rules);
        $input = $request->all();
        unset($input['_token']);
        $param = ['input' => $input];
        return view('bgc.companyaddcheck', $param);
    }

    public function create(Request $request)
    {
        /*postで限定：inserして一覧画面へ移動*/
        $companies = new Companies;
        $from = $request->all();
        unset($from['_token']);
        $companies->fill($from)->save();
        return redirect('companieslist');
    }

    public function detail(Request $request){
        /*会社の詳細情報表示*/
        $items = Companies::where('id', $request->id)->first();
        return view('bgc.companydetail',['items' => $items]);

    }
}
