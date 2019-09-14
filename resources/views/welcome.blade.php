<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Commune</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/welcome.css') }}" rel="stylesheet">
         
    </head>
    <body>
        <div class="site-wrapper">

          <div class="site-wrapper-inner">
        
            <div class="cover-container">
        
              <header class="masthead clearfix">
                <div class="inner">
                  <nav class="nav nav-masthead">
                       @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">新規登録</a>
                                @endif
                            @endauth
                    @endif
                  </nav>
                </div>
              </header>
        
              <main role="main" class="inner cover">
                <h1 class="cover-heading">Commune</h1>
                <p class="lead">自由に作れるコミュニティサイト</p>
                <p class="lead">
                  <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Login</a>
                </p>
              </main>
        
              <footer class="mastfoot">
                
              </footer>
        
            </div>
        
          </div>
        
        </div>
       	<!-- Optional JavaScript -->
      	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
        
    </body>
</html>



