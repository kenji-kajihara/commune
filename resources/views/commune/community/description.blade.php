@extends('layouts.commune')
@section('title',"{{ $community->name }}コミュニティ")

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
                {{ $user->name }}
            </div>
            
        </div>
    </div>
@endsection