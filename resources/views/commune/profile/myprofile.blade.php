@extends('layouts.commune')
@section('title',"MYプロフィール")

@section('content')
    <div class="container">
        <h2>MYプロフィール</h2>
        <div class="row">
        <div class="col-md-9">
        <div class="jumbotron">
        <div class="row mx-auto h3">
            <label class="col-md-3">氏名</label>
            <div class="col-md-9 h1">
                {{ $myprofile->name }}
            </div>
        </div>
        <div class="row mx-auto h3">
            <label class="col-md-3">性別</label>
            <div class="col-md-9 h1">
                {{ $myprofile->gender }}
            </div>
        </div>
        <div class="row mx-auto h3">
            <label class="col-md-3">趣味</label>
            <div class="text-wrap text-break col-md-9 h1">
                {{ $myprofile->hobby }}
            </div>
        </div>
        <div class="row mx-auto ">
            <label class="col-md-3 h3">自己紹介</label>
            <p class="leed col-md-9 h5">
                {{ $myprofile->introduction }}
            </p>
        </div>
        
        
        </div>
        <div class="row mx-auto">
        <div class="col-md-2">
            <a href="{{ action('ProfileController@edit',['id' => $myprofile->id]) }}" role="button" class="btn btn-primary btn-lg">編集</a>
        </div>
        </div>
        </div>
        
        <div class="row col-md-3">
            <div class="card col-md-12">
            <h5>参加コミュニティ一覧</h5>
            <ul class="communities-list mx-auto">
                @foreach($follows as $follow)
                       <li>
                           <a href="{{ action('CommunityController@description',['id' => $follow->community_id]) }}">{{ $follow->communities->name }}</a>
                       </li>
                @endforeach
            </ul>
            </div>
        </div>
        
        </div>
    </div>
@endsection