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
<form id = "customerInfo" action = "/dopost" method = "POST" target = "_self">
                <!-- laravel function to prevent cross-site request forgery attacks -->
                @csrf
                <!--Get the customer's first name-->
                
                        <label class="mr-2" for="customerFirstName">First Name</label>
                        <input type="text" class="form_control col-md-8" id="customerFirstName" minlength="2" required
                            placeholder="First Name" name="fname">

                            <div class="form-group">
                    <label for="customerMediaSelection">Media Selection</label>
                    <select class="form-control" id="customerMediaSelection" name="mediaSelect">
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

                <input type = "submit" name = "customerInfo" value ="Submit">
                    <input type = "reset" value ="Reset">



</body>