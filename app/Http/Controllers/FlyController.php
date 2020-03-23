<?php

namespace App\Http\Controllers;


//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;

use App\Customer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlyController extends Controller
{
    
    public function dopost(Request $request)
    {
        //debug request
        //dd($request->all());

        //Create a new instance of Customer model
        $customer = new Customer;


        //Validate inputs as needed

        //Populate customer instance with elements of the request
        // Date and time of creation
        $currenttime =Carbon::now();

        $customer->FIRST_NAME=$request->customerFirstName;
        $customer->LAST_NAME=$request->customerLastName;
        $customer->EMAIL_ADDRESS=$request->customerEmail1;
        $customer->PHONE_NUMBER=$request->customerPhoneNum;
        $customer->PHONE_TYPE=$request->customerPhoneType;
        $customer->CREATION_DATE=$currenttime;
        $customer->LAST_UPDATE_DATE=$currenttime;
        //TODO: figure out what to do with the timestamps fields
        $customer->updated_at=$currenttime;
        $customer->created_at=$currenttime;
        

        //Save to database
        $customer->save();

        //need to have error handling here to see if save was successful 
        // or not and pass this result to the dopost view
        $result = "hardcoded success for now";

        // call view
        return view('dopost', ["request"=> $request,"resultMessage"=> $result]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
