@extends('layouts.bgcapp')

@section('title', '会社一覧')

@section('content')
    <div class="col-12">
        <div class="card">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                <tr>
                    <th class="pl-0">会社名 {!! session('flash_message') !!}</th><th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>
                        <a href="companydetail?id={{$item->id}}">{{$item->name}}</a>
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
