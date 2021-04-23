@extends('layout')

@section('content')
 
 <h1>利用者一覧</h1>
>
    <table class="table table-striped">

        <th>id</th>
        <th>名前</th>
        <th>性別</th>
        <th>年齢</th>
        <th>基礎疾患</th>
        <th>メールアドレス</th>
        <th>受講コース</th>
        <th>当ジムへの要望</th>
        <th>要望検討</th>

        <th>処理</th>
    <!-- loop -->
    @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->disease}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->course}}</td>
            <td>{{$member->demand}}</td>
            <td>{{$member->demand_nec}}</td>
        </tr>
    @endforeach
    </table>

@endsection