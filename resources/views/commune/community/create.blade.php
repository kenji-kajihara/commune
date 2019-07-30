@extends('layouts.commune')
@section('title','コミュニティ新規作成')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティ新規作成</h2>
                <form acrion="{{ action('CommunityController@create') }}" method="POST" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                      <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                      </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="name">コミュニティネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="description">コミュニティ概要</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" rows="20">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    {{ csrf_field()}}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection