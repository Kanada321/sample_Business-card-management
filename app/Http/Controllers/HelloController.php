<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $sort = $request->sort;
        $page=  $request->page;
        if(empty($sort)){
            $sort = 'id';
        }
        $items = Person::orderBy($sort, 'asc')->simplePaginate(2);
        $param = ['items' => $items, 'sort' => $sort, 'page' => $page, 'user' => $user];
        //echo dirname(__FILE__);
        return view('hello.index', $param);

    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => $msg
        ];
        return view('hello.index',$data);
    }
}
