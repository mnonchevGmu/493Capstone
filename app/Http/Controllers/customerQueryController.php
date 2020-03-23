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


        
        $customerQuery = $customer->newQuery();
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
        
        /*start of Monica changes

        // Media Type
        //
        
        if ($request->has('videoOnly')) {
            $customerQuery->where('VIDEO', $request->input('videoOnly'));
        }
        else if ($request->has('photoOnly')){
            $customerQuery->where('PHOTOS', $request->input('photoOnly'));
        }
        else ($request->has('VideoAndPhotos')){
            $customerQuery->where('VIDEO+PHOTOS', $request->input('VideoAndPhotos'));
        }
        END*/
        // Get the results and return them.
        //can i just return the view with the data? like ...

        $customers = $customerQuery->get();
        $numCustomers = $customers->count();

        return view('showCustomerTable', ["filteredCustomers"=>$customers, "numCustomers"=>$numCustomers]);
    //return $customer->get();
    }
}
