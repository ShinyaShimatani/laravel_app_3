@extends('layout')

@section('content')

<div class="topics" style="padding: 16px">
<strong>新規アイデア登録</strong>
</div>

@if ($errors->any())
<div style="color:red;">
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<form method="post" action="{{route('store')}}">

  @csrf

  　<div class="form-group">
    <label for="name">起案者</label>
    <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
    <label for="idea">アイデア</label>
    <input type="text" name="idea" class="form-control">
    </div>

    <div class="form-group">
    <label for="purpose">目的</label>
    <input type="text" name="purpose" class="form-control">
    </div>

    <div class="form-group" style="padding-top: 8px">
    <label for="demand_nec">要望検討</label><br>
    <input id="demand_nec-Y" type="radio" name="demand_nec" value="要検討">
    <label for="demand_nec-Y">要検討</label>
    <input id="demand_nec-N" type="radio" name="demand_nec" value="見送り">
    <label for="demand_nec-N">見送り</label><br>

    <button type="post" class="btn btn-primary" action="/confirm" style="margin: 16px">登録する</button>
  
</form>

  @if($errors->any())
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif

  <a href="{{ route('trainer.index') }}">キャンセル</a> 
 </form>
 
@endsection