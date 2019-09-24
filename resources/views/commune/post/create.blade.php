@extends('layouts.commune')
@section('title','記事投稿')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規作成</h2>
                <form method="POST" action="{{ route('post.store',['community_id' => $community_id]) }}" >
                    @csrf
                    @if (count($errors) > 0)
                      <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                      </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control"  name="title" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">内容</label>
                        <div class="col-md-10">
                            <textarea id="body" class="form-control" name="body" rows="20">{{ old('description') }}</textarea>
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                </form>
            </div>
        </div>
    </div>
@endsection