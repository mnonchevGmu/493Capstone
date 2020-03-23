<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class customerQueryController extends Controller
{
    //
    public function filter(Request $request, Customer $customer)
    {
        //debug request
        //dd($request->all());


        //Create a new query object
        $customerQuery = $customer->newQuery();

        //Join to customer_media
        $customerQuery->join('CUSTOMER_MEDIA', 'CUSTOMERS.CUSTOMER_ID', '=', 'CUSTOMER_MEDIA.CUSTOMER_ID');
        // First Name

        if (($request->has('customerFirstName')) AND ($request->input('customerFirstName'))!== null) {
            $customerQuery->where('FIRST_NAME', $request->input('customerFirstName'));
        }

        // Last Name
        if (($request->has('customerLastName')) AND ($request->input('customerLastName'))!== null ) {
            $customerQuery->where('LAST_NAME', $request->input('customerLastName'));
        }
        // Email
        if (($request->has('customerEmail1')) AND ($request->input('customerEmail1'))!== null ) {
            $customerQuery->where('EMAIL_ADDRESS', $request->input('customerEmail1'));
        }
        
        // Phone Number
        if (($request->has('customerPhoneNum')) AND ($request->input('customerPhoneNum'))!== null )  {
            $customerQuery->where('PHONE_NUMBER', $request->input('customerPhoneNum'));
        }
        
        // Phone Type
        if (($request->has('customerPhoneType')) AND ($request->input('customerPhoneType'))!== null )  {
            $customerQuery->where('PHONE_TYPE', $request->input('customerPhoneType'));
        }
        

        // Media Type
        //
        
        if (($request->has('customerMediaSelection')) AND ($request->input('customerMediaSelection'))!== null) {
            $customerQuery->where('MEDIA_TYPE', $request->input('customerMediaSelection'));
        }

        //Jump Date
        if (($request->has('customerJumpDate')) AND ($request->input('customerJumpDate'))!== null) {
            $customerQuery->where('SKYDIVE_DATE', $request->input('customerJumpDate'));
        }
       

        // Get the results and return them.

        $customers = $customerQuery->get();
        $numCustomers = $customers->count();

        return view('showCustomerTable', ["filteredCustomers"=>$customers, "numCustomers"=>$numCustomers]);
    //return $customer->get();
    }
}
