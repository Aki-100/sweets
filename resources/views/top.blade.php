<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Japanese sweets!</title>
        <!--cssの読み込み-->
        <link rel="stylesheet" href="/css/top.stylesheet.css">        
    </head>
    <body>
        <div class="index">
            <h1>Find Japanese sweets!</h1>
            @if (Route::has('login'))
                <div class="login&register">
                    @auth
                        <h1><a href="{{ url('/home') }}">Home</a></h1>
                    @else
                        <h1><a href="{{ route('login') }}">Log in</a></h1>
                        @if (Route::has('register'))
                        <h1><a href="{{ route('register') }}">Register</a></h1>
                        @endif
                    @endauth
                </div>
            @endif
        </div>    
    </body>
</html>
