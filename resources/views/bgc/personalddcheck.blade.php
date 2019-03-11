@extends('layouts.bgcapp')

@section('title', '新規名刺登録確認')


@section('content')
    <div class="col-12">

        <form action="bgccreate" class="card" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
            </div>
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名</label>
                        <div class="form-control-plaintext name">{{$input['company_name']}}</div>
                        <input type="hidden" name="companies_id" value="{{$input['companies_id']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">部署名</label>
                        <div class="form-control-plaintext name">{{$input['department']}}</div>
                        <input type="hidden" name="department" value="{{$input['department']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">役職名</label>
                        <div class="form-control-plaintext name">{{$input['position']}}</div>
                        <input type="hidden" name="position" value="{{$input['position']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名</label>
                        <div class="form-control-plaintext name">{{$input['name']}}</div>
                        <input type="hidden" name="name" value="{{$input['name']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名（カナ）</label>
                        <div class="form-control-plaintext name">{{$input['name_kana']}}</div>
                        <input type="hidden" name="name_kana" value="{{$input['name_kana']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名（英語表記）</label>
                        <div class="form-control-plaintext name">{{$input['name_english']}}</div>
                        <input type="hidden" name="name_english" value="{{$input['name_english']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">電話（内線等）</label>
                        <div class="form-control-plaintext name">{{$input['tel']}}</div>
                        <input type="hidden" name="tel" value="{{$input['tel']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">携帯電話</label>
                        <div class="form-control-plaintext name">{{$input['mobile']}}</div>
                        <input type="hidden" name="mobile" value="{{$input['mobile']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">画像選択</label>
                        <!-- div class="form-control-plaintext name">{{$input['mobile']}}</div>
                        <input type="hidden" name="mobile" value="{{$input['mobile']}}" -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label">備考</label>
                        @php
                        $comment_html = nl2br($input['comment']);
                        @endphp
                        <div class="form-control-plaintext name">{{$comment_html}}</div>
                        <input type="hidden" name="comment" value="{{$input['comment']}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <div class="d-flex">
                <a href="javascript:history.back();" class="btn btn-link" id="return">戻る</a>
                <button type="submit" class="btn btn-primary ml-auto">登録</button>
            </div>
        </div>
        </form>
    </div>
@endsection
