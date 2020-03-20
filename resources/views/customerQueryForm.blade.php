<!doctype html>
<html>

<head>
@include('layout.partials.head')
<link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />

</head>

<body>

@include('layout.partials.nav')

<div class="container border border-dark p-3 bg-mediumgrey border-width-3">



<form action="/queryPOST">
    <!-- needed for Laravel CSRF framework -->
    @csrf
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" id="FirstName"  placeholder="First Name">
   </div>
   <div class="form-group">
    <label for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName"  placeholder="Last Name">
   </div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="VideoOnly" value="VIDEO">
  <label class="form-check-label" for="VideoOnly">Video</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="PhotoOnly" value="PHOTOS">
  <label class="form-check-label" for="PhotoOnly">Photos</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="VideoAndPhotos" value="VIDEO+PHOTOS" >
  <label class="form-check-label" for="VideoAndPhotos">Video and Photos</label>
</div>
<br>
  <button type="submit" class="btn btn-primary" formmethod="post">Submit</button>
</form>


</div>

@include('layout.partials.footer-scripts')

</body>
</html>