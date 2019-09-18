
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/commune.css') }}" rel="stylesheet">
    
</head>
<body>
 
        <nav class="navbar navbar-expand-md navbar-laravel">
            <a class="navbar-brand" href="{{ url('/') }}">Commune</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04"
                        aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('CommunityController@index') }}">コミュニティ一覧
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('ProfileController@index') }}">プロフィール一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('ProfileController@myprofile') }}">MYプロフィール</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('PostController@index') }}">掲示板</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/map">MAP</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                    <li class="ml-5"><a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
                    @else
                    <li class="nav-item dropdown dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdown04">
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('messages.Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
                @endif
            </div>
        </nav>
        
    @yield('content')

    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoFOPV9hQvUh44hWIb-SRFJFIH22Yf9n4&libraries=places"
    ></script>
    	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<!-- js -->
    <script src="{{ asset('/js/map.js') }}" async></script>


</body>
</html>
