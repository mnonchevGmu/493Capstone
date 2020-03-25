<!doctype html>
<html>

<head>
    @include('layout.partials.head')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />

</head>

<body>

    @include('layout.partials.nav')

    <div class="container border border-dark p-3 bg-mediumgrey border-width-3">



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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-2" type="radio" name="customerPhoneType" id="cellPhoneType"
                                value="CELL">
                            <label class="form-check-label m-2" for="cellPhoneType">Cell</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-2" type="radio" name="customerPhoneType" id="homePhoneType"
                                value="HOME">
                            <label class="form-check-label m-2" for="homePhoneType">Home</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-2" type="radio" name="customerPhoneType" id="workPhoneType"
                                value="WORK">
                            <label class="form-check-label m-2" for="workPhoneType">Work</label>
                        </div>

                    </div>
                </div>


            </div>


            <div class="form-group">
                <label for="customerJumpDate">Jump Date</label>
                <input type="text" class="form-control" id="customerJumpDate" placeholder="YYYY-MM-DD"
                    name="customerJumpDate">
            </div>

            <fieldset class="mediaType-border border border-dark rounded p-2">
                <legend class="mediaType-border">Media Type</legend>

                <div class="form-check form-check-inline">
                    <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="VideoOnly"
                        value="VIDEO">
                    <label class="form-check-label m-2" for="VideoOnly">Video</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="PhotosOnly"
                        value="PHOTOS">
                    <label class="form-check-label m-2" for="PhotosOnly">Photos</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="VideoAndPhotos"
                        value="VIDEO+PHOTOS">
                    <label class="form-check-label m-2" for="VideoAndPhotos">Video and Photos</label>
                </div>
                <!-- TODO need to make a way to unset the radio buttons-->
            </fieldset>

            <br>
            @csrf
            <button type="submit" class="btn btn-primary" formmethod="post">Submit</button>
        </form>




    </div>

    @include('layout.partials.footer-scripts')

</body>

</html>