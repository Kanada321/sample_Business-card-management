@extends('layouts.bgcapp')

@section('title', '新規名刺登録')

@section('content')
    <div class="col-12">
        {!! Form::open(['url' => 'bgccreate', 'method' => 'post', 'files' => true,'class'=>'card']) !!}
        <!-- form action="bgccheck" class="card" enctype="multipart/form-data" method="post" accept-charset="utf-8" -->
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
            </div>
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">会社選択<span class="form-required">*</span></label>
                        <!-- 会社選択画面 -->
                        {{Form::select('companies_id', $selects, null, ['class' => 'field'])}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">部署名<span class="form-required">*</span></label>
                        <input type="text" class="form-control name" name="department" placeholder="部署名を記入してください。" value="{{old('department')}}">
                        @if ($errors->has('department'))
                            @foreach($errors->get('department') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">役職名<span class="form-required">*</span></label>
                        <input type="text" class="form-control name" name="position" placeholder="役職名を記入してください。" value="{{old('position')}}">
                        @if ($errors->has('position'))
                            @foreach($errors->get('position') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名<span class="form-required">*</span></label>
                        <input type="text" class="form-control name" name="name" placeholder="名刺に記載された氏名を記入してください。" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名（カナ）</label>
                        <input type="text" class="form-control name" name="name_kana" placeholder="名刺に記載された氏名（カナ）を記入してください。" value="{{old('name_kana')}}">
                        @if ($errors->has('name_kana'))
                            @foreach($errors->get('name_kana') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">氏名（英語表記）</label>
                        <input type="text" class="form-control name" name="name_english" placeholder="名刺に記載された氏名（英語表記）を記入してください。" value="{{old('name_english')}}">
                        @if ($errors->has('name_english'))
                            @foreach($errors->get('name_english') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">電話（内線等）</label>
                        <input type="tel" class="form-control tel" name="tel" placeholder="電話番号を記入してください。" value="{{old('tel')}}">
                        @if ($errors->has('tel'))
                            @foreach($errors->get('tel') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">携帯電話</label>
                        <input type="tel" class="form-control tel" name="mobile" placeholder="電話番号を記入してください。" value="{{old('mobile')}}">
                        @if ($errors->has('mobile'))
                            @foreach($errors->get('mobile') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">画像選択</label>
                        <!-- input type="tel" class="form-control tel" name="mobile" placeholder="電話番号を記入してください。" value="{{old('mobile')}}" -->

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">画像選択</label>
                            <!-- div class="form-control-plaintext name">{{$input['mobile']}}</div>
                        <input type="hidden" name="mobile" value="{{$input['mobile']}}" -->
                                {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                                {!! Form::file('file') !!}
                            </div>
                        </div>

                        @if ($errors->has('mobile'))
                            @foreach($errors->get('mobile') as $error)
                                <div class="invalid-feedback">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label">備考</label>
                        <textarea rows="5" class="form-control" name="comment" placeholder="備考を記入してください。">{{old('comment')}}</textarea>
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
