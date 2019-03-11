<?php

namespace App\Http\Controllers;

use App\{Companies, Personals};
use Illuminate\Http\Request;

class BgclistController extends Controller
{
    public function index()
    {
        /*get：名刺情報の一覧表示
         *検索・ソート・会社別表示・画像一覧
        */
        /* 会社一覧　*/
        $items = Personals::orderBy('id','asc')->simplePaginate(5);
        return view('bgc.bgclist',['items' => $items]);
    }

    public function detail(Request $request){
        /*名刺の詳細情報表示*/
        $items = Personals::where('id', $request->id)->first();
        return view('bgc.bgcdetail',['items' => $items]);

    }

    public function add()
    {
        /*名刺新規追加画面*/
        $companies = Companies::select('id','name')->orderBy('id','asc')->get();
        $select_ar = [];
        $selects = [];
        foreach ($companies as $val){
            $id = $val['id'];
            $name = $val['name'];
            $selects[$id] = $name;
        }
        return view('bgc.personaladd',['selects' => $selects]);

    }

    public function addcheck(Request $request){
        $this->validate($request, Personals::$rules, Personals::$messages);
        $input = $request->all();
        unset($input['_token']);
        $param = ['input' => $input];
        return view('bgc.personaladdcheck', $param);
    }
    public function edit(){

    }
}
