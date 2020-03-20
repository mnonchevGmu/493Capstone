<!doctype html>
<html>

<head>
@include('layout.partials.head')
<link rel="stylesheet" type="text/css" href="{{ url('/css/projectStyles.css') }}" />

</head>

<body>

@include('layout.partials.nav')

<div class="container border border-dark p-3 bg-mediumgrey border-width-3">
<p>Customer Table</p>
<br>
Num Matching Customers: {{ $numCustomers}}
<br>

<table class = "table table-striped table-hover">
    <thead>
        <tr>
            <th>Customer ID: </th>
            <th>First Name: </th>
            <th>Last Name: </th>
            <th>Email Address: </th>
            <th>Phone Number: </th>
            <th>Phone Type: </th>
        </tr>
    </thead>
    <tbody>
    @foreach($filteredCustomers as $customer)
        <tr>
            <td>{{ $customer->CUSTOMER_ID }}</td>
            <td>{{ $customer->FIRST_NAME }}</td>
             <td>{{ $customer->LAST_NAME }} </td>
             <td>{{ $customer->EMAIL_ADDRESS }}</td>
             <td>{{ $customer->PHONE_NUMBER }}</td>
            <td>{{ $customer->PHONE_TYPE }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

<br><br>

</div>

@include('layout.partials.footer-scripts')

</body>
</html>