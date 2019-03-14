@extends('layouts.bgcapp')

@section('title', '名刺一覧')
@section('user', $username.'でログインしています。')

@section('content')
    <div class="col-12">
        <div class="card">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                <tr>
                    <th class="pl-0">会社名</th><th>氏名 {!! session('flash_message') !!}</th><th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>
                        @if($item->companies != null)
                        {{$item->companies->get_name()}}
                        @endif
                    </td>
                    <td class="w-50">
                        <a href="bgcdetail?id={{$item->id}}">{{$item->name}}</a>
                    </td>
                    <td class="w-1"><a href="javascript:void(0)" class="icon"  onClick="disp('{{$item->id}}','{{$item->name}}')"><i class="fe fe-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
    <script type="text/javascript">
        <!--

        function disp(id,name){
            if(window.confirm('「' + name + '」を削除します')){
                location.href = "companyremove?id=" + id; //
            }else{
                window.alert('キャンセルされました'); // 警告ダイアログを表示
            }
        }

        // -->
    </script>
@endsection
