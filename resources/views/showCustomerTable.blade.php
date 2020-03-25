<!doctype html>
<html>

<head>
@include('layout.partials.head')

<title>{{ $numCustomers}} Matching Customers</title>

</head>

<body>

@include('layout.partials.nav')

<div class="container-fluid border border-dark p-3 bg-mediumgrey border-width-3">
<h3>Matching Customers</h3>
<p>Num Matching Customers: {{ $numCustomers}}</p>

<table class = "table table-striped table-hover">
    <thead>
        <tr>
            <th>Customer ID </th>
            <th>First Name </th>
            <th>Last Name </th>
            <th>Email Address </th>
            <th>Phone Number </th>
            <th>Phone Type </th>
            <th>Media Type </th>
            <th>Skydive Date </th>
            <th>USB?</th>
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
            <td>{{ $customer->MEDIA_TYPE }}</td>
            <td>{{ $customer->SKYDIVE_DATE }}</td>
            <td>{{ ($customer->USB_REQUIRED_ACK == 1) ? 'Yes' : 'No' }}</td>
        </tr>
    @endforeach
    </tbody>

</table>

<br><br>

</div>

@include('layout.partials.footer-scripts')

</body>
</html>