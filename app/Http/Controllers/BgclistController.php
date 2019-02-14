<?php

namespace App\Http\Controllers;

//use App\Companies;
use App\Personals;
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

    }
}
