@extends('layouts.commune')

@section('title','投稿一覧')

@section('content')
    <div class="container">
            <div class="mb-4">
                <a href="{{ route('post.create',['community_id' => $community_id]) }}" class="btn btn-primary btn-block">
                    投稿を新規作成する
                </a>
            </div>
         @foreach($posts as $post)
           <div class="card mb-4">
               <div class="card-header">
                   <p class="text-left">{{ $post->title }}</p>
                    <div class="text-right">
                       @if($post->user_id == Auth::id())
                       
                        <a class="btn btn-success" href="{{ route('post.edit',['post' => $post]) }}">編集する</a>
                        
                        <form style="display: inline-block;" method="POST" action="{{ route('post.destroy', ['post' => $post]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">削除する</button>
                        </form>
                        
                       @endif
                    </div>
               </div>
               <div class="card-body">
                   <p>{!! nl2br(e(str_limit($post->body, 200))) !!}</p>
                   <a class="card-link" href="{{ route('post.show', ['post' => $post]) }}">
    続きを読む
</a>
               </div>
               <div class="card-footer ">
                   <p class="text-left"><a href="{{ action('ProfileController@get_profile', ['id' => $post->user->profile->id]) }}">投稿者：{{ $post->user->profile->name }}</a></p>
                   </span>

                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                   <p class="text-right">{{ $post->created_at }}</p>
               </div>
           </div>
         @endforeach
         <div class="d-flex justify-content-center mb-5">
            {{ $posts->links() }}
         </div>
    </div>
@endsection