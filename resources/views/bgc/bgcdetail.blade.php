@extends('layouts.bgcapp')

@section('title', '新規会社登録確認')


@section('content')
    <div class="col-12">
        <form action="bgcedit" class="card" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="card-header">
                <h3 class="card-title">@yield('title'){!! session('flash_message') !!}</h3>
            </div>
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名</label>
                        <div class="form-control-plaintext name">{{$items->companies->get_name()}}</div>
                        <input type="hidden" name="id" value="{{$items->id}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（カナ）</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->name_kana}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（英語表記）</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->name_english}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">郵便番号</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->postal_code}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->address}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（カナ）</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->address_kana}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（英語表記）</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->address_english}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">電話</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->tel}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">FAX</label>
                        <div class="form-control-plaintext name">{{$items->companies->get()->fax}}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label">備考</label>
                        @php
                        $comment_html = nl2br($items->comment);
                        @endphp
                        <div class="form-control-plaintext name">{{$comment_html}}</div>
                    </div>
                </div>
                <!-- 氏名　部署　個人電話 -->
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">修正する</button>
        </div>
        </form>
    </div>
@endsection
