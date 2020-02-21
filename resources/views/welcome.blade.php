<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skydive Orange</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />
        <!-- Styles 
        <style>
           
  
        </style>
        -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        <!--Added todayEnd of today's addition-->
            <div class="bgimg">
                <div class="blankarea">

                    <div style = "background-image: url('/images/welcomeBackground.jpg');">
                    </div>
    
                </div>
            </div>
    
        <!--
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
            <div class="content">
                <div class="title m-b-md">
                    Welcome to Skydive Orange
                    <hr>  
                </div>
               
                <div class="links">
                    <a href= '/new'>New Customer</a>
                    <a href='/returning'>Returning Customer</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
