@extends('layouts.bgcapp')

@section('title', '新規会社登録確認')


@section('content')
    <div class="col-12">
        <form action="companycreate" class="card" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
            </div>
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名</label>
                        <div class="form-control-plaintext name">{{$input['name']}}</div>
                        <input type="hidden" name="name" value="{{$input['name']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（カナ）</label>
                        <div class="form-control-plaintext name">{{$input['name_kana']}}</div>
                        <input type="hidden" name="name_kana" value="{{$input['name_kana']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（英語表記）</label>
                        <div class="form-control-plaintext name">{{$input['name_english']}}</div>
                        <input type="hidden" name="name_english" value="{{$input['name_english']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">郵便番号</label>
                        <div class="form-control-plaintext name">{{$input['postal_code']}}</div>
                        <input type="hidden" name="postal_code" value="{{$input['postal_code']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所</label>
                        <div class="form-control-plaintext name">{{$input['address']}}</div>
                        <input type="hidden" name="address" value="{{$input['address']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（カナ）</label>
                        <div class="form-control-plaintext name">{{$input['address_kana']}}</div>
                        <input type="hidden" name="address_kana" value="{{$input['address_kana']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（英語表記）</label>
                        <div class="form-control-plaintext name">{{$input['address_english']}}</div>
                        <input type="hidden" name="address_english" value="{{$input['address_english']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">電話</label>
                        <div class="form-control-plaintext name">{{$input['tel']}}</div>
                        <input type="hidden" name="tel" value="{{$input['tel']}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">FAX</label>
                        <div class="form-control-plaintext name">{{$input['fax']}}</div>
                        <input type="hidden" name="fax" value="{{$input['fax']}}">
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
