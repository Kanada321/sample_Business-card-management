<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BgclistController extends Controller
{
    public function index()
    {
        /*get：名刺情報の一覧表示
         *検索・ソート・会社別表示・画像一覧
        */
        return view('bgc.index');
    }
}
