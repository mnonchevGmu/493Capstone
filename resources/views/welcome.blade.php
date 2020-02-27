<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skydive Orange</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />
 
        <!-- TODO: point to the bootstrap local vs this CDN link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 
        <!-- Styles 
        <style>
           
  
        </style>
        -->
    </head>
    <body>

      <!--Added todayEnd of today's addition-->
      <div class="bgimg">
  <!--            <div class="blankarea">
-->
  
 

    <div class="title bg-black text-center">
                        <p class="welcomeTitle">Welcome to Skydive Orange</p>
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

                
                    <div class="links fixed-bottom m-b-md">
                        <div class="d-flex  justify-content-around align-content-center">
                            <div class="p-2">
                            <a href='/new' class = "links"> Check In Here</a>
                            </div>

                        <!-- Took the returning customer page out
                            <div class="p-2">
                            
                            <a href='/returning' class = "links"> Returning Customer</a>
                            </div>
                        -->
                            </div>  
                    </div>

            </div>


        </div>
        </div>
    </body>
</html>
