@extends('layouts.commune')
@section('title',"MYプロフィール")

@section('content')
    <div class="container">
        <div class="row">
            <h2>MYプロフィール</h2>
        </div>
        
        <div class="row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-8 mx-auto">
                {{ $myProfile->name }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">性別</label>
            <div class="col-md-8 mx-auto">
                {{ $myProfile->gender }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">趣味</label>
            <div class="col-md-8 mx-auto">
                {{ $myProfile->hobby }}
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">自己紹介</label>
            <div class="col-md-8 mx-auto">
                {{ $myProfile->introduction }}
            </div>
        </div>
    </div>
@endsection