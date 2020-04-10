<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.head')

    <title>Skydive Orange</title>


</head>

<body>
@include('layout.partials.nav')

    <div class="bgimg">



        <div class="title bg-black text-center">
            <p class="welcomeTitle">Welcome to Skydive Orange</p>
        </div>



        <div class="links fixed-bottom m-b-md">
            <div class="d-flex  justify-content-around align-content-center">
                <div class="p-2">
                    <a href='/new' class="links"> Check In Here</a>
                </div>

            </div>
        </div>

    </div>


    </div>
    </div>
    @include('layout.partials.footer-scripts')

</body>

</html>