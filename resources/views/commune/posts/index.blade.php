@extends('layouts.commune')

@section('title','登録済みコミュニティ一覧')

@section('content')
    <div class="container">
        <div class="row">
         @foreach($posts as $post)
           <div class="posts card col-md-12">
               <div class="title">
                   <p>{{ $post->title }}</p>
               </div>
               <div class="body">
                   <p>{{ $post->body }}</p>
               </div>
           </div>
         @endforeach
        </div>
    </div>
@endsection