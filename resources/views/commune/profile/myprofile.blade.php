@extends('layouts.commune')
@section('title',"MYプロフィール")

@section('content')
    <div class="container">
        <div class="row">
            <h2>MYプロフィール</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ action('ProfileController@edit',['id' => $myprofile->id]) }}" role="button" class="btn btn-primary">編集</a>
        </div>
        <div class="row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-8 mx-auto">
                {{ $myprofile->name }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">性別</label>
            <div class="col-md-8 mx-auto">
                {{ $myprofile->gender }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">趣味</label>
            <div class="col-md-8 mx-auto">
                {{ $myprofile->hobby }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">自己紹介</label>
            <div class="col-md-8 mx-auto">
                {{ $myprofile->introduction }}
            </div>
        </div>
    </div>
@endsection