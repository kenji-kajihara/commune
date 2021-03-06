@extends('layouts.commune')

@section('title','登録済みプロフィール一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('ProfileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('ProfileController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
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
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th width="10%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="10%">趣味</th>
                                <th width="50%">自己紹介</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <td><a  href="{{ action('ProfileController@get_profile', ['id' => $profile->id])}}">{{ str_limit($profile->name,100) }}</a></td>
                                    <td>{{ str_limit($profile->gender,100) }}</td>
                                    <td>{{ str_limit($profile->hobby,100) }}</td>
                                    <td>{{ str_limit($profile->introduction,250) }}</td>
                                    
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 d-flex justify-content-center mb-5">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection