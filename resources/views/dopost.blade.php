<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--TODO need to change this to the layout.partials style of page -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skydive Orange -- Thank You</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />
 
        <!-- TODO: point to the bootstrap local vs this CDN link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 
        <!-- Styles 
        <style>
           
  
        </style>
        -->
    </head>
    <body>

<h1> Result of Insert Goes Here</h1>
</br>
<!--debug request
    //@dd($request->all());
-->

    <p>Result of insert: {{$resultMessage}}</p>

    </body>