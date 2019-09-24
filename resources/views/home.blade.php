@extends('layouts.commune')

@section('content')
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="storage/image/community.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>コミュニティ</h1>
            <p>皆さんが自由にコミュニティを作る事ができます。<br>
        好きな映画、俳優、アクションやホラーといったジャンル、様々なテーマをもとに集まりましょう！</p>
            <p>
              <a class="btn btn-secondary" href="{{ action('CommunityController@index') }}" role="button">一覧を見る &raquo;</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="storage/image/profile.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>プロフィール</h1>
            <p>同じ映画やジャンル、俳優を好きな人を探してみましょう！<br> その人がどんなコミュニティに入っているかも確認できます！</p>
            <p>
              <a class="btn btn-secondary" href="{{ action('ProfileController@index') }}" role="button">一覧を見る &raquo;</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="storage/image/cinema.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>MAP</h1>
            <p>近くの映画館を検索することができます。<br> 住所や施設等を、映画館に続けて入力することで、簡単に検索したい付近の映画館を探し出してみましょう！<p>
            <p>
              <a class="btn btn-secondary" href="{{ url('/map') }}" role="button">映画館を探す &raquo;</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  
  <div class="container marketing">
    <div class="row col-md-12 text-center">
      <div class="col-lg-4">
        <i class="fas fa-comments fa-10x mb-3 icon" style=""></i>
        <h2>コミュニティ</h2>
        <p>コミュニティに参加しよう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ action('CommunityController@index') }}" role="button">一覧を見る &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fas fa-user-friends fa-10x mb-3 icon"></i>
        <h2>プロフィール</h2>
        <p>映画友達を探そう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ action('ProfileController@index') }}" role="button">一覧を見る &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fas fa-map-marker-alt fa-10x mb-3 icon"></i>
        <h2>MAP</h2>
        <p>近くの映画館を探そう！</p>
        <p>
          <a class="btn btn-secondary" href="{{ url('/map') }}" role="button">映画館を探す &raquo;</a>
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
        <i class="fas fa-comments fa-10x mb-3 icon" style=""></i>
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
        <i class="fas fa-user-friends fa-10x mb-3 icon"></i>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          <span class="text-muted">映画館に行ってみよう</span>
        </h2>
        <p class="lead">映画館に続いて、住所や施設名を入力すると、検索ワード付近の映画館を探し出すことができます。
        気になる場所の映画館を探して直接に行ってみましょう！</p>
      </div>
      <div class="col-md-5 text-center">
       <i class="fas fa-map-marker-alt fa-10x mb-3 icon"></i>
      </div>
    </div>

    <hr class="featurette-divider">


    
  </div>
    


</main>
@endsection
