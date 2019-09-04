@extends('layouts.commune')
@section('title',"プロフィール")

@section('content')
    <div class="container">
        <h2>プロフィール</h2>
        <div class="row">
        <div class="col-md-9">
        <div class="jumbotron">
        <div class="row mx-auto h3">
            <label class="col-md-3">氏名</label>
            <div class="col-md-9 h1">
                {{ $profile->name }}
            </div>
        </div>
        <div class="row mx-auto h3">
            <label class="col-md-3">性別</label>
            <div class="col-md-9 h1">
                {{ $profile->gender }}
            </div>
        </div>
        <div class="row mx-auto h3">
            <label class="col-md-3">趣味</label>
            <div class="text-wrap text-break col-md-9 h1">
                {{ $profile->hobby }}
            </div>
        </div>
        <div class="row mx-auto ">
            <label class="col-md-3 h3">自己紹介</label>
            <p class="leed col-md-9 h5">
                {{ $profile->introduction }}
            </p>
        </div>
        
        
        </div>
        <div class="row mx-auto">
        </div>
        </div>
        
        <div class="row col-md-3">
            <div class="card col-md-12">
            <h5>参加コミュニティ一覧</h5>
            <div class="mx-auto">
                @foreach($follows as $follow)
                    @foreach($communities as $community)
                    <ul class="list-group list">
                            @if($follow->community_id == $community->id)
                            <li class="list-group-item">
                                <a href="{{ action('CommunityController@description',['id' => $community->id]) }}">{{ $community->name }}</a>
                            </li>
                            @endif
                    </ul>
                    @endforeach
                @endforeach
            </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection