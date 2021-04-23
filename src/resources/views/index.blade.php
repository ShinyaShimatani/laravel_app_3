@extends('layout')

@section('content')
 
 <h1>利用者一覧</h1>
>
    <table class="table table-striped">

        <th>id</th>
        <th>名前</th>
        <th>モノマネ</th>
        <th>自虐</th>
        <th>哀愁</th>
        <th>緩急</th>
        <th>ブラックジョーク</th>
        <th>声量</th>
        <th>熱量</th>
        <th>狂気</th>

    <!-- loop -->
    @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->mimic}}</td>
            <td>{{$member->maso}}</td>
            <td>{{$member->pathos}}</td>
            <td>{{$member->change-of-pace}}</td>
            <td>{{$member->black}}</td>
            <td>{{$member->volume}}</td>
            <td>{{$member->energy}}</td>
            <td>{{$member->insane}}</td>
        </tr>
    @endforeach
    </table>

@endsection