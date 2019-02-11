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
                    <th class="pl-0">会社名</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                <tr>
                    <td class="pl-0">
                        <a href="companydetail?id={{$item->id}}">{{$item->name}}</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
@endsection
