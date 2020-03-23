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
    <input type="text" class="form-control" id="customerFirstName"  placeholder="First Name" name="customerFirstName">
   </div>
   <div class="form-group">
    <label for="customerLastName">Last Name</label>
    <input type="text" class="form-control" id="customerLastName"  placeholder="Last Name" name="customerLastName">
   </div>

<div class="form-group">
    <label for="customerEmail1">Customer Email</label>
    <input type="text" class="form-control" id="customerEmail1"  placeholder="Customer Email" name="customerEmail1">
   </div>

    <!-- TODO put the phone and type on the same row -->
   <div class="form-group">
    <label for="customerPhoneNum">Customer Phone Number</label>
    <input type="text" class="form-control" id="customerPhoneNum"  placeholder="Customer Phone Number" name="customerPhoneNum">
   </div>
   
   <!-- TODO make the phone type pull from the database and make a dropdown -->
   <div class="form-group">
    <label for="customerPhoneType">Customer Phone Type</label>
    <input type="text" class="form-control" id="customerPhoneType"  placeholder="Customer Phone Number" name="customerPhoneType">
   </div>

<fieldset class="mediaType-border border border-dark rounded p-2">
    <legend class = "mediaType-border">Media Type</legend>

        <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="customerMediaSelection" value="VIDEO">
        <label class="form-check-label m-2" for="VideoOnly">Video</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="customerMediaSelection" value="PHOTOS">
        <label class="form-check-label m-2" for="PhotosOnly">Photos</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="customerMediaSelection" value="VIDEO+PHOTOS" >
        <label class="form-check-label m-2" for="VideoAndPhotos">Video and Photos</label>
        </div>
</fieldset>

<br>
     @csrf
  <button type="submit" class="btn btn-primary" formmethod="post">Submit</button>
</form>




</div>

@include('layout.partials.footer-scripts')

</body>
</html>