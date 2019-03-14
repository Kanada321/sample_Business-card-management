<?php

namespace App\Http\Controllers;

use App\{Companies, Personals};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BgclistController extends Controller
{
    public $username;
    public function __construct(){
        //ログインチェック
        $username = Auth::user();//$userはモデルインスタンス、ログインしていないときはnull
        if(! $username){
            $this->username = "GUEST";
        }else{
            $this->username = $username;
        }

    }

    public function index()
    {
        /*get：名刺情報の一覧表示
         *検索・ソート・会社別表示・画像一覧
        */
        /* 会社一覧　*/
        $items = Personals::orderBy('id','asc')->simplePaginate(5);
        return view('bgc.bgclist',['items' => $items, 'username' => $this->username]);
    }

    public function detail(Request $request){
        /*名刺の詳細情報表示*/
        $items = Personals::where('id', $request->id)->first();
        return view('bgc.bgcdetail',['items' => $items, 'username' => $this->username]);

    }

    public function add()
    {
        /*名刺新規追加画面*/
        $companies = Companies::select('id','name')->orderBy('id','asc')->get();
        $selects = [];
        foreach ($companies as $val){
            $id = $val['id'];
            $name = $val['name'];
            $selects[$id] = $name;
        }
        return view('bgc.personaladd',['selects' => $selects, 'username' => $this->username]);

    }

    public function addcheck(Request $request){
        $this->validate($request, Personals::$rules_1, Personals::$messages);
        if($request->tel){
            $this->validate($request, Personals::$rules_tel, Personals::$messages);
        }
        if($request->mobile){
            $this->validate($request, Personals::$rules_mobile, Personals::$messages);
        }
        /****画像アップロード処理****/
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
               // 'file',
                // 画像ファイルであること
               // 'image',
                // MIMEタイプを指定
              //  'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
              //  'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $filename = "test3";
            //事前にシンボリック変更php artisan storage:link
            $access_token = str_random(7);
            $filename =  $request->file->storeAs('images/card',$access_token . '.jpg');//\storage\app\images\card

          //  return redirect('/home')->with('success', '保存しました。');
            //DBへ格納
            //$user = User::find(auth()->id());テーブルとｉｄを指定
            //$user->avatar_filename = basename($filename);insertorupdateのカラム名を指定
            //$user->save();//保存
        } else {
           /* return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);*/
        }
print "<img src=\"/laravel/laravel_bgc/storage/app/images/card/test3.jpg\" ><br>".$filename ;//
        Storage::disk('local')->delete('images/card/test2.jpg');
        exit;
        /****************************/
        $input = $request->all();
        unset($input['_token']);
        $param = ['input' => $input, 'username' => $this->username];
        return view('bgc.personaladdcheck', $param);
    }

    public function create()
    {
        /*バリデーション*/
    }

    public function edit(){

    }
}
