<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/x.x.x/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />

    <script type="text/javascript" src='scripts.js'>
    </script>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
    </script>

    <!--
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
-->

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.js">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>


</head>

<body>

    <!--Placement of logo
<div class="topleft">
    <a href = '/welcome'>
        <img src = "/images/SOI Logo100x100.png" alt = "Skydive Orange Logo"
            style="margin: 15px 15px 15px 15px">
    </a>
</div>
-->
    <!--Beginning of the main content where the user is asked to enter info on a form-->
    <div class="row">
        <div class="col-md-12 col1color">
            <div class="container mt-4">
               
                <p id="top" class = "col-md-12 col1color">Please fill out the form below so we may 
                    pull up your account information.<br>
                </p>
            </div>

            <div class="container border border-dark p-3 bg-mediumgrey border-width-3">
                <form id="customerInfo" action="/dopost" method="POST" target="_self">
                    <!-- laravel function to prevent cross-site request forgery attacks -->
                    @csrf
                    <!--Get the customer's first name-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="mr-2" for="customerFirstName">First Name</label>
                            <input type="text" class="form_control col-md-8" id="customerFirstName"
                                name="customerFirstName" minlength="2" required placeholder="First Name">
                        </div>

                        <!--Get the customer's last name-->
                        <div class="form-group col-md-6">
                            <label class="mr-2" for="customerLastName">Last Name</label>
                            <input type="text" class="form_control col-md-8" id="customerLastName"
                                name="customerLastName" minlength="2" required placeholder="Last Name">
                        </div>
                    </div>

                    <!--Get the customer's email address and ask to re-type email-->
                    <fieldset class="email-border border border-dark rounded p-3 mb-4">
                        <legend class="email-border">Contact Information</legend>
                        <label for="customerEmail1">Email Address</label>
                        <input type="email" class="form-control mb-3" id="customerEmail1" name="customerEmail1" required
                            placeholder="email@domain.com">
                    </fieldset>

                    
                    <!--Taken out
                <div class = "form-group ui-widget">
                    <label for="customerMediaSelection">Media Selection (start with AFF or Tandem)</label>
                    <input id = "customerMediaSelection" class = "form-control">
                </div>
            -->

                    <!--Get customer to select if they wanted to upgrade or not-->
                    <div class="form-row">
                        <fieldset class="mediaType-border border border-dark rounded p-3 mb-4">
                            <legend class="mediaType-border">Validate Information</legend>


                            <!--</div>-->
                            <div class="container border-dark rounded p-4 mb-4">
                                <div class="row">
                      
                                    <div class="col">
                                        <p>Populate user record here based on input
                                    </div>
                                </div>
                            </div>
                            <!--TODO: when I delete this para, the form doesn't extend all the way. WHY? -->
                             <p>Our goal is to get your skydive media to you as quick as reasonably possible.  There are several factors
                             which may delay delivery of your media including: internet speeds, YouTube and Dropbox availability, and 
                             the volume of customers.  You should expect to receive your media within 48 hours, if not sooner.
                            </p>

                        </fieldset>
                    </div>


                    <div class="buttonCenter">
                        <!--TODO: does name here have to be same name as the form? -->
                        <input type="submit" name="customerInfo" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </div>

            <!--Internal link that brings customer back to top of the page-->
            <a href="#top">Go back to the top of the page</a>
        </div>


    </div>

    <!--Container for the footer
<div class="navbar navbar-expand-sm navbar-default navbar-fixed-bottom" id="footerBar">
    <div class="container">
-->
    <!--Taken out
        <div class="col-md-6">
            <p><em>Disclaimer: This website is developed as an educational project.</em></p>
        </div>
    -->
    </div>
    </div>
    </div>

    <!--Jquery validate plugin-->
    <script>
    //old validator.
    $("#customerInfo").validate();

    /*
    var $form = $("customerInfo"),
    $successMsg = $(".alert");
    $.validate({
    errorMessageClass: "error",
    onSuccess: function(){
        $successMsg.show();
        return false; // stops submitting
    }
    });
    */

    /*
    $( function() {
        $("#customerMediaSelection").selectmenu();
        console.log("done");
      } );
    */




    $(function() {
        var availableMedia = [
            "Tandem Photos Only",
            "Tandem Video and Photos",
            "Tandem Video Only",
            "AFF Photos Only",
            "AFF Video and Photos",
            "AFF Video Only"
        ];

        $("#customerMediaSelection").autocomplete({
            source: availableMedia
        });


    });
    </script>

    <!--Script files needed for Bootstrap styles-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

</body>