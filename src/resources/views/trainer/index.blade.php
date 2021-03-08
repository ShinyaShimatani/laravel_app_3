@extends('layout')

@section('content')
 
 <h1>アイデア一覧</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('register')}}" class="btn btn-primary" style="margin:20px;">企画案を新規登録する</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">

    　　<th>id</th>
        <th>名前</th>
        <th>アイデア</th>
        <th>目的</th>
        <th>要望検討</th>

        <th>処理</th>
    <!-- loop -->
    @foreach($trainers as $trainer)
        <tr>
            <td>{{$trainer->id}}</td>
            <td>{{$trainer->name}}</td>
            <td>{{$trainer->idea}}</td>
            <td>{{$trainer->purpose}}</td>
            <td>{{$trainer->demand_nec}}</td>

            <td><a href="{{route('edit',['id'=>$trainer->id])}}">編集</a> ; 
            <a href="{{route('delete',['id'=>$trainer->id])}}">削除</a></td>
        </tr>
    @endforeach
    </table>

@endsection