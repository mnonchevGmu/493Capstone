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

<script
src="https://code.jquery.com/jquery-3.4.0.min.js"
integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
crossorigin="anonymous">
</script>

<!--
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
-->

<script
src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js">
</script>

<script 
src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.js">
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>


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
    <div class="col-md-8 col1color">
        <div class="container mt-4">
            <div class = "topleft">
                <a href = '/welcome'>
                    <img src = "/images/SOI Logo100x100.png" alt = "Skydive Orange Logo"
                        style = "margin: 15px 15px 15px 15px">
                </a>
            </div>
            <p id="top">Please fill out the form below and read the terms and Conditions
                of your media purchase.<br><br>
            </p>
        </div>

        <div class="container border border-dark p-3 bg-mediumgrey border-width-3">
            <form id = "customerInfo">

                <!--Get the customer's first name-->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="mr-2" for="customerFirstName">First Name</label>
                        <input type="text" class="form_control col-md-8" id="customerFirstName" minlength="2" required
                            placeholder="First Name">
                    </div>

                    <!--Get the customer's last name-->
                    <div class="form-group col-md-6">
                        <label class="mr-2" for="customerLastName">Last Name</label>
                        <input type="text" class="form_control col-md-8" id="customerLastName" minlength="2" required
                            placeholder="Last Name">
                    </div>
                </div>

                <!--Get the customer's email address and ask to re-type email-->
                <fieldset class="email-border border border-dark rounded p-3 mb-4">
                    <legend class="email-border">Contact Information</legend>
                    <label for="customerEmail1">Email Address</label>
                    <input type="email" class="form-control mb-3" id="customerEmail1" required
                        placeholder="email@domain.com">
                    <label for="customerEmail2">Re-type Email Address</label>
                    <input type="email" class="form-control " id="customerEmail2" required
                        placeholder="email@domain.com">
                    <small id="email2Tip" class="form-text text-muted ml-3">Both email addresses must
                        match</small>
                        <label for="customerphoneNum">Phone Number</label>
                    <input type="customerPhoneNum" class="form-control mb-3" id="customerPhoneNum" required
                        placeholder="###-###-####">
                </fieldset>

                <fieldset class="email-border border border-dark rounded p-3 mb-4">
                    <legend class="email-border">Skydive and Media Information</legend>
                <div class="form-row">

                    <!--Get customer to select their jump date-->
                    
                    <div class="form-group col-md-6">
                        <label class="mr-2" for="customerJumpDate">Date of Skydive</label>
                       <input type="date" class="form-control" id="customerJumpDate">
                    </div>

                </div>
                
                <!--Taken out
                <p>Please select the media that you would like to purchase today.
                </p>
                -->
                <!--Get customer to select which media they wanted-->
                
                <!--Change from select class to selectmenu with jquery UI-->
                
                <div class="form-group">
                    <label for="customerMediaSelection">Media Selection</label>
                    <select class="form-control" id="customerMediaSelection">
                            <optgroup label="Tandem">
                                    <option>Tandem Video Only</option>
                                    <option>Tandem Photos Only</option>
                                    <option>Tandem Video and Photos</option>
                            </optgroup>
                            <optgroup label="AFF">
                                    <option>AFF Video Only</option>
                                    <option>AFF Photos Only</option>
                                    <option>AFF Video and Photos</option>
                            </optgroup>
                            
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
                        <p>If you purchased "Video only" or "Photos only", would you like to upgrade
                            to receive both video and photos? If yes, a customer service
                            representative will reach out within 24 hours to assist you.
                        </p>
            
               <!-- <div class="form-row d-flex justify-content-center">-->

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="cloud" id="cloudCheck">
                    <label class="form-check-label pr-5 pl-1" for="cloudCheck">
                        I understand that my media can take up to 48 hours to complete
                    </label>

   

    <!--Taken out
    <input class="form-check-input" type="checkbox" value="dvd" id="dvdCheck">
    <label class="form-check-label pr-5 pl-1" for="dvdCheck">
        Mailed DVD
    </label>
    -->
</div>

<!--</div>-->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediaTermsAckRadio"
                                id="mediaTermsAckRadio1" value="yes">
                            <label class="form-check-label" for="mediaTypeRadio1">
                                I acknowledge
                            </label>
                      

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediaTermsAckRadio"
                                id="mediaTermsAckRadio2" value="no" checked>
                            <label class="form-check-label" for="mediaTypeRadio2">
                                I do not acknowledge
                            </label>
                            <div class="reveal-if-active">
                                 <!--Needs to be dependent on user selecting no to terms-->
                            <input class="form-check-input" type="checkbox" value="usb" id="usbCheck">
                            <label class="form-check-label pr-5 pl-1" for="usbCheck">
                                I understand that I will need to purchase a USB drive to obtain my media
                            </label>
                            </div>
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
                <div class = "buttonCenter">
                    <input type = "submit" value ="Submit">
                    <input type = "reset" value ="Reset">
                </div>
            </form>
        </div>

        <!--Internal link that brings customer back to top of the page-->
        <a href="#top">Go back to the top of the page</a>
    </div>

    <!--Beginning of side content-->
    <div class="col-md-4 col2color">
        <h2 class="h2 p-3">Terms and Conditions</h2>


        <div class="border border-dark rounded p-3 mb-4">
            <p> <span class="InitLetterBold pr-3">Q:</span> How soon should I expect to get my skydiving media
                (digital
                video and photos)?</p>

            <p> <span class="InitLetterBold pr-3">A:</span> We are excited for you to receive your media as
                quick as
                possible; however,
                there are a number of factors which influence when you will receive your media.
                Primarily, the upload speeds to YouTube and Dropbox may cause delays, as the media
                we capture is high resolution (see below). Additionally, during busy days we have
                our videographers working hard capturing the freefall experience for many students
                and often have to do back-to-back jumps. </p>
            <p>
                Generally, we expect to have your skydiving media uploaded within 24 hours of the day of your
                skydive;
                however, we have seen the media from busy weekends take 48-72 hours if our media hosting
                providers
                (YouTube and Dropbox) is unresponsive.
            </p>
            <p>
                If you have not seen the completion emails from us within 48 hours from the day of your skydive,
                please
                contact us.
            </p>
        </div>
        <div class="border border-dark rounded p-3 mb-4">

            <p> <span class="InitLetterBold pr-3">Q:</span> What kind of media will I receive?
            </p>
            <p> <span class="InitLetterBold pr-3">A:</span>
                Skydive videos are all shot in 1080p / 60fps and output from our editing software at that same
                resolution. The still pictures may have different image sizes, based on the and ~ 24 megapixels.
            </p>
        </div>

        <!--Container that includes external links to different skydiving manufacturers-->
        <div class="border border-dark rounded p-3 mb-4">
            <p> <span class="InitLetterBold pr-3">Q:</span> What if I don't want my video on Youtube?</p>

            <p> <span class="InitLetterBold pr-3">A:</span> Please select the option within the form to indicate
                that you do not accept the terms of the agreement, and we would be happy to give you a USB. Please 
                note that there is an additional cost of $5 for the USB. </p>
                
                
                <!--Button to activate the "Raw ajax" code created. Taken out
                <button class="btn btn-dark m-3" id="mfgButton"
                                onclick="mfgRead()">Add checkbox</button>
                    <ul class="list-group" id="mfgItems">
                    


                    </ul>
                 -->

        </div>
    </div>
</div>

<!--Container for the footer-->
<div class="navbar navbar-expand-sm navbar-default navbar-fixed-bottom" id="footerBar">
    <div class="container">

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




$( function() {
    var availableMedia = [
    "Tandem Photos Only",
    "Tandem Video and Photos",
    "Tandem Video Only",
    "AFF Photos Only",
    "AFF Video and Photos",
    "AFF Video Only"
    ];
    
        $( "#customerMediaSelection" ).autocomplete({
        source: availableMedia
        });

 
} );
</script>

<!--Script files needed for Bootstrap styles-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
crossorigin="anonymous"></script>

</body>

