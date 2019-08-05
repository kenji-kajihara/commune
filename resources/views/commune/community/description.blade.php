@extends('layouts.commune')
@section('title',"コミュニティ")

@section('content')
    <div class="container">
        <div class="row">
            <h2>コミュニティ</h2>
        </div>
        
        <div class="row">
            <label class="col-md-2">コミュニティネーム</label>
            <div class="col-md-8 mx-auto">
                {{ $community->name }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">概要</label>
            <div class="col-md-8 mx-auto">
                {{ $community->description }}
            </div>
            </div>
        <div class="row">
            <label class="col-md-2">コミュニティ作成者</label>
            <div class="col-md-8 mx-auto">
                {{ $active_user->name }}
            </div>
        </div>
        <div class="col-md-8 md-aux">
            <h3>コミュニティ参加者一覧</h3>
            <ul>
                @foreach($checkFollows as $checkFollow)
                    @foreach($users as $user)
                        @if($checkFollow->user_id == $user->id)
                        <li>
                            <h4>{{ $user->name }}</h4>
                        </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ action('FollowController@add',['id' => $community->id]) }}" 
                 role="button" class="btn btn-primary">参加</a>
            </div>
            <div class="col-md-6">
                <a href="{{ action('FollowController@delete',['id' => $community->id]) }}" 
                    role="button" class="btn btn-primary">退会</a>
            </div>
        </div>
    </div>
@endsection