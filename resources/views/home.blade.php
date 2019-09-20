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
    
        <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">コミュニティ
          <span class="text-muted">集まろう</span>
        </h2>
        <p class="lead">皆さんが自由にコミュニティを作る事ができます。
        好きな映画、俳優、アクションやホラーといったジャンル、様々なテーマをもとに集まりましょう！</p>
      </div>
      <div class="col-md-5 text-center">
        <i class="fas fa-user-friends fa-10x mb-3 icon" style=""></i>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">プロフィール
          <span class="text-muted">友達を探そう</span>
        </h2>
        <p class="lead">同じ映画やジャンル、俳優を好きな人を探してみましょう！その人がどんなコミュニティに入っているかも確認できます！</p>
      </div>
      <div class="col-md-5 text-center">
        <i class="fas fa-user fa-10x mb-3 icon"></i>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">掲示板
          <span class="text-muted">繋がろう</span>
        </h2>
        <p class="lead">皆さんは自由に投稿することができます。映画レビューや、名シーンについてなど、好きな話をしてみましょう！</p>
      </div>
      <div class="col-md-5 text-center">
       <i class="fas fa-comments fa-10x mb-3 icon"></i>
      </div>
    </div>

    <hr class="featurette-divider">


    
  </div>
    


</main>
@endsection
