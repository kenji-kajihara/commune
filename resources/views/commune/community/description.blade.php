@extends('layouts.commune')
@section('title',"コミュニティ参加画面")

@section('content')
 <main role="main">
    <div class=container>
    <div class="jumbotron">
      <h1 class="display-3">{{ $community->name }}</h1>
      <p class="lead">{{ $community->description }}</p>
      <p>
        <a class="btn btn-outline-primary btn-lg" href="{{ action('FollowController@add',['id' => $community->id]) }}"  role="button">Join</a>
      </p>
      <p>
        <a class="btn btn-outline-danger btn-sm" href="{{ action('FollowController@delete',['id' => $community->id]) }}" role="button" >Leave</a>
      </p>
        @if($community->user_id == Auth::user()->id)
            <div class="row">
                <div class="col-md-6">
                    <a class="badge badge-success" href="{{ action('CommunityController@edit',['id' => $community->id]) }}">コミュニティ編集</a>
                </div>
                <div class="col-md-6">
                    <a class="badge badge-danger" href="{{ action('CommunityController@delete',['id' => $community->id]) }}">コミュニティ削除</a>
                </div>
            </div>
        @endif
        <p>コミュニティ製作者:{{ $create_user->profile->name }}</p>
    </div>
    </div>
    <div class="row">
        <div class="card">
        <div class="col-md-12 md-aux">
            <h3>コミュニティ参加者一覧</h3>
            <ul>
                @foreach($check_follows as $check_follow)
                    @foreach($users as $user)
                        @if($check_follow->user_id == $user->id)
                        <li>
                            <h4>{{ $user->profile->name }}</h4>
                        </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
        </div>
    </div>
</main>
@endsection