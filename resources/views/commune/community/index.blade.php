@extends('layouts.commune')

@section('title','登録済みコミュニティ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>コミュニティ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('CommunityController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('CommunityController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">コミュニティネーム</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}" />
                        </div>
                        <div class="col-md-2">
                                {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">コミュニティ製作者</th>
                                <th width="20%">コミュニティネーム</th>
                                <th width="50%">概要</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $community)
                                <tr>
                                    <th>{{ $community->id }}</th>
                                    <th>{{ $community->user->profile->name }}</th>
                                    <td>{{ str_limit($community->name,100) }}</td>
                                    <td>{{ str_limit($community->description,250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('CommunityController@description',['id' => $community->id]) }}">コミュニティへ</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection