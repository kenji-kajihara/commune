@extends('layouts.commune')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-box card">
                <div class="card-body mx-auto">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h2> You are logged in!</h2>
                   <div class="row">
                        <div class="offset-md-3">
                            <a href="{{ action('ProfileController@add') }}" role="button" class="btn bt-block btn-primary">プロフィール作成</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
