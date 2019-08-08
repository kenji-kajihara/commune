@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h2> You are logged in!</h2>
                   
                    <div class="col-md-12">
                        <a href="{{ action('ProfileController@add') }}" role="button" class="btn bt-block btn-primary">プロフィール作成</a>
                        <a href="{{ action('CommunityController@index') }}">登録済みの方はこちら</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
