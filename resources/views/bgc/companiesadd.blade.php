@extends('layouts.bgcapp')

@section('title', '新規会社登録')

@section('content')
    <div class="col-12">
        <form action="companiescheck" class="card" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
            </div>
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名<span class="form-required">*</span></label>
                        <input type="text" class="form-control name" name="name" placeholder="会社名を記入してください。" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                            <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（カナ）</label>
                        <input type="text" class="form-control name" name="name_kana" placeholder="会社名（カナ）を記入してください。" value="{{old('name_kana')}}">
                        @if ($errors->has('name_kana'))
                            @foreach($errors->get('name_kana') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社名（英語表記）</label>
                        <input type="text" class="form-control name" name="name_english" placeholder="会社名（英語表記）を記入してください。" value="{{old('name_english')}}">
                        @if ($errors->has('name_english'))
                            @foreach($errors->get('name_english') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">郵便番号</label>
                        <input type="text" class="form-control post" name="postal_code" placeholder="郵便番号を記入してください。" value="{{old('postal_code')}}">
                        @if ($errors->has('postal_code'))
                            @foreach($errors->get('postal_code') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所</label>
                        <input type="text" class="form-control" name="address" placeholder="住所を記入してください。" value="{{old('address')}}">
                        @if ($errors->has('address'))
                            @foreach($errors->get('address') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（カナ）</label>
                        <input type="text" class="form-control" name="address_kana" placeholder="住所（カナ）を記入してください。" value="{{old('address_kana')}}">
                        @if ($errors->has('address_kana'))
                            @foreach($errors->get('address_kana') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">住所（英語表記）</label>
                        <input type="text" class="form-control" name="address_english" placeholder="住所（英語表記）を記入してください。" value="{{old('address_english')}}">
                        @if ($errors->has('address_english'))
                            @foreach($errors->get('address_english') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">電話</label>
                        <input type="tel" class="form-control tell" name="tel" placeholder="電話番号を記入してください。" value="{{old('tel')}}">
                        @if ($errors->has('tel'))
                            @foreach($errors->get('tel') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">FAX</label>
                        <input type="tel" class="form-control fax" name="fax" placeholder="FAX番号を記入してください。" value="{{old('fax')}}">
                        @if ($errors->has('fax'))
                            @foreach($errors->get('fax') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label">備考</label>
                        <textarea rows="5" class="form-control" name="comment" placeholder="備考を記入してください。">
                            {{old('comment')}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">確認</button>
        </div>
        </form>
    </div>
@endsection
