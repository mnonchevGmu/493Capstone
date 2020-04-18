<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.head')
    <title>Thank You</title>

</head>

<body>
    @include('layout.partials.nav')
    <!--Added todayEnd of today's addition-->
    <div class="landingImg">
        <div class="title bg-black text-center">
            <p class="welcomeTitle">Thank you for your submission!</p>
        </div>



        <div class="links fixed-bottom ">
            <div class="d-flex  justify-content-around align-content-center bg-black">
                <div class="p-2">
                    <a href='/new' class = "links">New Customer</a>
                </div>

            </div>




        </div>
    </div>
    @include('layout.partials.footer-scripts')

    <script type = "text/javascript">
        setTimeout(function(){window.location="/"}, 6000);
    </script>
</body>

</html>