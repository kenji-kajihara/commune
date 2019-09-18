@extends('layouts.commune')

@section('title','投稿一覧')

@section('content')
    <div class="container">
        <div class="jumbotron pt-5">
        <div class="post-head text-left border-bottom">
            <h1>{{ $post->title }}</h1>
            <p>{!! nl2br(e($post->body)) !!}</p>
        </div>
        
        <div class="post-body text-left mt-4">
            <h2>コメント</h2>
            <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
                @csrf
            
                <input
                    name="post_id"
                    type="hidden"
                    value="{{ $post->id }}">
                <div class="form-group">
                    <label for="body">
                        本文
                    </label>
                    
                    <textarea
                        id="body"
                        name="body"
                        class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <div class="invalid-feedback">
                            {{ $errors->first('body') }}
                        </div>
                    @endif
                </div>
            
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        コメントする
                    </button>
                </div>
            </form>
            @forelse($post->comments as $comment)
                <div class="border-top p-4">
                    <p>
                    <a href="{{ action('ProfileController@get_profile', ['id' => $comment->user->profile->id]) }}">{{ $comment->user->profile->name }}</a>
                    <span>{{ $comment->created_at }}</span>
                    </p>
                    <p>{!! nl2br(e($comment->body)) !!}</p>
                </div>
            @empty
            <p>コメントはまだありません。</p>
            @endforelse
        </div>
        </div>
    </div>
@endsection

