@extends('layouts.commune')

@section('content')
<main role="main">
  <header class="mb-5">
    <h1 class="text-center">映画で繋がるコミュニティサイト</h1>
  </header>
  
  <div class="container marketing">
    <div class="row col-md-12 text-center">
      <div class="col-lg-4">
        <i class="fas fa-user-friends fa-10x mb-3 icon" style=""></i>
        <h2>コミュニティ</h2>
        <p>コミュニティに参加しよう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ action('CommunityController@index') }}" role="button">一覧を見る &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fas fa-user fa-10x mb-3 icon"></i>
        <h2>プロフィール</h2>
        <p>映画友達を探そう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ action('ProfileController@index') }}" role="button">一覧を見る &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fas fa-comments fa-10x mb-3 icon"></i>
        <h2>掲示板</h2>
        <p>映画について語ろう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ action('PostController@index') }}" role="button">一覧を見る &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    
  </div>
    


</main>
@endsection
