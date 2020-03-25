<!doctype html>
<html>

<head>

    <!-- INCLUDE COMMON HEAD -->
    @include('layout.partials.head')


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

                <p id="top" class="col-md-12 col1color">Please fill out the form below and read the Terms and Conditions
                    of your media purchase.<br>
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
                        <label for="customerEmail2">Re-type Email Address</label>
                        <input type="email" class="form-control " id="customerEmail2" name="customerEmail2" required
                            placeholder="email@domain.com">
                        <small id="email2Tip" class="form-text text-muted ml-3">Both email addresses must
                            match</small>
                        <div class="row">
                            <div class="col-md-6">

                                <label for="customerPhoneNum">Phone Number</label>
                                <input type="customerPhoneNum" class="form-control mb-3" id="customerPhoneNum"
                                    name="customerPhoneNum" required placeholder="###-###-####">
                            </div>
                            <div class="col-md-6 mt-4">

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

                    </fieldset>


                    <fieldset class="email-border border border-dark rounded p-3 mb-4">
                        <legend class="email-border">Skydive and Media Information</legend>
                        <div class="form-row">

                            <!--Get customer to select their jump date-->

                            <div class="form-group col-md-6">
                                <label class="mr-2" for="customerJumpDate">Date of Skydive</label>
                                <input type="date" class="form-control" id="customerJumpDate" name="customerJumpDate">
                            </div>

                        </div>

                        <!--Taken out
                <p>Please select the media that you would like to purchase today.
                </p>
                -->
                        <!--Get customer to select which media they wanted-->

                        <!--Change from select class to selectmenu with jquery UI
                    TODO Change this to pull from Database LOV table-->

                        <div class="form-group">
                            <label for="customerMediaSelection">Media Selection</label>
                            <select class="form-control" id="customerMediaSelection" name="customerMediaSelection">
                                <option>VIDEO</option>
                                <option>PHOTOS</option>
                                <option>VIDEO+PHOTOS</option>

                            </select>
                        </div><br>
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
                            <legend class="mediaType-border">Terms and Acknowledgement</legend>


                            <!--</div>-->
                            <div class="container border border-dark rounded p-4 mb-4">
                                <div class="row">
                                    <!--TODO: remove borders -->

                                    <div class="col-5">
                                        <div class="row p-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mediaTermsAckRadio"
                                                    id="mediaTermsAckRadio1" value="yes" checked>
                                                <label class="form-check-label" for="mediaTypeRadio1">
                                                    I acknowledge
                                                </label>


                                            </div>
                                        </div>
                                        <div class="row p-2 ">
                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="mediaTermsAckRadio"
                                                    id="mediaTermsAckRadio2" value="no">
                                                <label class="form-check-label" for="mediaTypeRadio2">
                                                    I <u>do not</u> acknowledge
                                                </label>

                                                <div class="row reveal-if-active">

                                                    <!--Needs to be dependent on user selecting no to terms-->
                                                    <input class="form-check-input" type="checkbox" value="Yes"
                                                        id="usbCheck" name="usbCheck">
                                                    <label class="form-check-label pr-5 pl-3" for="usbCheck">
                                                        I understand that I will need to purchase a USB drive to
                                                        obtain my media
                                                    </label>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <p>that my media will be uploaded to public media services such as Youtube and
                                            Dropbox
                                            as private links which can then be shared with friends and family as
                                            desired. </p>
                                    </div>
                                </div>
                            </div>
                            <p>Our goal is to get your skydive media to you as quick as reasonably possible. There are
                                several factors
                                which may delay delivery of your media including: internet speeds, YouTube and Dropbox
                                availability, and
                                the volume of customers. You should expect to receive your media within 48 hours, if not
                                sooner.
                            </p>

                            <!-- <div class="form-row d-flex justify-content-center">-->

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="yes" id="deliveryTimeAck"
                                    name="deliveryTimeAck">
                                <label class="form-check-label pr-5 pl-1" for="deliveryTimeAck">
                                    I understand that my media can take up to 48 hours to be delivered
                                </label>



                                <!--Taken out
    <input class="form-check-input" type="checkbox" value="dvd" id="dvdCheck">
    <label class="form-check-label pr-5 pl-1" for="dvdCheck">
        Mailed DVD
    </label>
    -->
                            </div>

                        </fieldset>
                    </div>

                    <!--Get customer to choose their media types, taken out
                <fieldset class="mediaFormat-border border border-dark rounded p-3 mb-4">
                    <legend class="mediaFormat-border">Choose your media type(s)</legend>

                    

                </fieldset>
                -->
                    <!--Text area provided for customer to enter additional info-->
                    <!--Taken out
                <div class="form-group">
                    <p>Please provide additional details below to assist us in fulfilling your
                        request.</p>
                    <label for="additionalInformation">Additional Details</label>
                    <textarea class="form-control" id="additionalInformation" rows="3" required></textarea>
                </div>
                -->
                    <div class="buttonCenter">
                        <!--TODO: does name here have to be same name as the form? -->
                        <input type="submit" name="customerInfo" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </div>


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

    @include('layout.partials.footer-scripts')

</body>