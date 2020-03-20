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


        $customer = $customer->newQuery();
        // First Name

        if ($request->has('FirstName')) {
            $customer->where('FIRST_NAME', $request->input('FirstName'));
        }

        // Last Name


        // Media Type

        // Get the results and return them.
        //can i just return the view with the data? like ...
        return view('showCustomerTable', ["customers"=>$customer->get()]);
    //return $customer->get();
    }
}
