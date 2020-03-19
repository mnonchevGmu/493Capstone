<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $customers = Customer::all();
        // This just returns the JSON for all the data in the database
        //return $customers;
        return view('showCustomerTable',[ 'customers' => $customers]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function showcustomer(Customer $customer)
    {
        //
        return view('showCustomer',['customer' => $customer, 'id' => $id]);
    }

    public function show( $id)
    {
        //
        return view('showCustomer',[ 'id' => $id]);
    }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Customer $customer)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Customer $customer)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Customer $customer)
    // {
    //     //
    // }
}
