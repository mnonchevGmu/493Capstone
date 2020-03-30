
@extends('layouts.app')

@section('content')
    <!-- INCLUDE project css -->
    @include('layout.partials.project')

    <div class="container border border-dark p-3 bg-mediumgrey border-width-3">


<div class = "border border-dark p-2 mb-3 bg-lightgrey border-width-1">
    Wildcard search operator is %

</div>
        <form action="{{ action('customerQueryController@filter')}} " method="POST">

            <div class="form-group">
                <label for="customerFirstName">First Name</label>
                <input type="text" class="form-control" id="customerFirstName" placeholder="First Name"
                    name="customerFirstName">
            </div>
            <div class="form-group">
                <label for="customerLastName">Last Name</label>
                <input type="text" class="form-control" id="customerLastName" placeholder="Last Name"
                    name="customerLastName">
            </div>

            <div class="form-group">
                <label for="customerEmail1">Customer Email</label>
                <input type="text" class="form-control" id="customerEmail1" placeholder="Customer Email"
                    name="customerEmail1">
            </div>

            <!-- TODO put the phone and type on the same row -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">

                        <label for="customerPhoneNum">Phone Number</label>
                        <input type="customerPhoneNum" class="form-control mb-3" id="customerPhoneNum"
                            name="customerPhoneNum" placeholder="###-###-####">
                    </div>
                    <div class="col-md-6 mt-4">
                        <!-- TODO make the phone type pull from the database and make a dropdown -->
                        <!-- TODO make a button to clear all these radio buttons-->
                        @include('layout.partials.phonetype-formfield')

                    </div>
                </div>


            </div>


            <div class="form-group">
                <label for="customerJumpDate">Jump Date</label>
                <input type="text" class="form-control" id="customerJumpDate" placeholder="YYYY-MM-DD"
                    name="customerJumpDate">
            </div>

            @include('layout.partials.mediatype-formfield')
            <br>
            @csrf
            <button type="submit" class="btn btn-primary" formmethod="post">Submit</button>
            <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
        </form>

        <div class="authUserDisplay mt-4">
         Authenticated as {{ Auth::user()->name }} 
        </div>


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/clear-radios.js') }}" defer></script>


    @include('layout.partials.footer-scripts')

@endsection





