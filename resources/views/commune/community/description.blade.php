@extends('layouts.commune')
@section('title',"コミュニティ参加画面")

@section('content')
 <main role="main">
    <div class=container>
    <div class="jumbotron">
      <h1 class="display-3">{{ $community->name }}</h1>
      <p class="lead">{{ $community->description }}</p>
       @if($community->user_id != Auth::user()->id)
         @if($community->follows->where('user_id',Auth::user()->id)->isEmpty())
          <p>
            <form  method="POST" action="{{ action('FollowController@join') }}">
              @csrf
              <input class="btn btn-outline-primary btn-lg" type="submit" value="join"/>
              <input type="hidden" value="{{ $community->id }}" name="id"/>
          </p>
         @else
          <p>
          </form>
          <form  method="POST" action="{{ action('FollowController@leave') }}">
              @csrf
              <input class="btn btn-outline-danger btn-lg" type="submit" value="Leave"/>
              <input type="hidden" value="{{ $community->id }}" name="id"/>
          </p>
          </form>
          @endif
        @elseif($community->user_id == Auth::user()->id)
            <div class="row">
                <div class="col-md-6">
                    <a class="badge badge-success" href="{{ action('CommunityController@edit',['id' => $community->id]) }}">コミュニティ編集</a>
                </div>
                <div class="col-md-6">
                    <a class="badge badge-danger" href="{{ action('CommunityController@delete',['id' => $community->id]) }}">コミュニティ削除</a>
                </div>
            </div>
        @endif
        <p><a class="text-muted" href="{{ action('ProfileController@get_profile', ['id' => $create_user->profile->id])}}">コミュニティ製作者:{{ $create_user->profile->name }}</a></p>
    </div>
    <div class="row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
         コミュニティ参加者一覧
        </button>
        <a class="btn btn-secondary" href="{{ action('PostController@index', ['id' => $community->id]) }}" role="button">一覧を見る &raquo;</a>
        
        <!-- モーダル -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">コミュニティ参加者一覧</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <ul class="list-group">
                @foreach($check_follows as $check_follow)
                    @foreach($users as $user)
                        @if($check_follow->user_id == $user->id)
                        <li class="list-group-item text-center">
                            <h4><a class="text-muted" href="{{ action('ProfileController@get_profile', ['id' => $user->profile->id])}}">{{ $user->profile->name }}</a></h4>
                        </li>
                        @endif
                    @endforeach
                @endforeach
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>
@endsection