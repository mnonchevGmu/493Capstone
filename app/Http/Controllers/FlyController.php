<?php

namespace App\Http\Controllers;


//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;

use App\Customer;
use App\CustomerMedia;
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

        
        //Create a new instance of CustomerMedia model
        $customerMedia = new CustomerMedia;
        //TODO need to get the CUSTOMER_ID of the record we just saved..
        //This -should- work
        $customerMedia->CUSTOMER_ID=$customer->CUSTOMER_ID;
        $customerMedia->SKYDIVE_DATE=$request->customerJumpDate;
        //TODO double check these values/etc. with the check boxes/radio buttons..
        $deliveryBoolVal=FALSE;
        if ( ($request->has('deliveryTimeAck')) AND ($request->input('deliveryTimeAck'))== 'Yes'){
            $deliveryBoolVal=TRUE;
        }
        $customerMedia->DELIVERY_TIME_ACK=$deliveryBoolVal;
        $mediaBoolVal=FALSE;
        if ( ($request->has('mediaTermsAckRadio1')) AND ($request->input('mediaTermsAckRadio1'))!== null){
            $mediaBoolVal=TRUE;
        }
        $customerMedia->MEDIA_TERMS_ACK=$mediaBoolVal;
        $usbBoolVal=FALSE;
        if ( ($request->has('usbCheck')) AND ($request->input('usbCheck'))=='Yes'){
            $usbBoolVal=TRUE;
        }     
        $customerMedia->USB_REQUIRED_ACK=$usbBoolVal;
        $customerMedia->MEDIA_TYPE=$request->customerMediaSelection;
      

        $customerMedia->CREATION_DATE=$currenttime;
        $customerMedia->LAST_UPDATE_DATE=$currenttime;
        //TODO: figure out what to do with the timestamps fields
        $customerMedia->updated_at=$currenttime;
        $customerMedia->created_at=$currenttime;

        //Save to database
        $customerMedia->save();


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
