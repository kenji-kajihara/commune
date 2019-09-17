@extends('layouts.commune')

@section('content')
  <div class="container">
    <p>住所等から付近の映画館を検索できます。</p>
      <form onsubmit="return false;">
        <input type="text" id="search" value="映画館php ">
        <button type="button" value="検索" onClick="SearchGo()">検索</button>
      </form>
      <div id="gmapBlock" style="height: 500px; width: 80%; margin: 2rem auto 0;"></div>
  </div>

@endsection