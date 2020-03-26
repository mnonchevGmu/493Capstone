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
    public function newCustomerValidate(Request $request)
    {//TODO: add custom messages

        $rules = [
                'customerFirstName' => 'required|max:255',
                'customerLastName' => 'required|max:255',
                'customerEmail1' => 'required|max:255|email:rfc,dns|regex:/.+(?<!edu)$/',
                'customerEmail2' => 'required|max:255|email:rfc,dns|same:customerEmail1',
                'customerPhoneNum' => 'required|max:20|regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
                'customerPhoneType' => 'required|exists:PHONE_TYPE_LOV,PHONE_TYPE',
                'customerJumpDate' => 'required|date',
                'customerMediaSelection' => 'required|exists:MEDIA_TYPE_LOV,MEDIA_TYPE',
                'mediaTermsAckRadio' => 'required',
                'usbCheck' => 'nullable|required_if:mediaTermsAckRadio, "No"',
                'deliveryTimeAck' => 'required'
            ];
    
        $customMessages = [
            'customerEmail1.required'=> 'You must provide an email address',
            'customerEmail1.email'=> 'You must provide a valid email address',
            'customerEmail1.regex' => 'Email cannot be a school (.edu) email',
            'customerEmail2.required'=> 'You must provide an email address and both must match',
            'customerEmail2.email'=> 'You must provide a valid email address and both must match',
            'customerEmail2.same'=> 'Both emails must match',
            'usbCheck.required_if' => 'You must acknowledge that you will need to purchase a USB if you do not want your media posted',
            'customerPhoneType.exists' => 'You must provide a valid phone type',
            'customerMediaSelection' => 'You must provide a valid media type',
            'required' => 'The :attribute field can not be blank.'
        ];
    
        $this->validate($request, $rules, $customMessages);

        
        // $validatedData = $request->validate([
        //     'customerFirstName' => 'required|max:255',
        //     'customerLastName' => 'required|max:255',
        //     'customerEmail1' => 'required|max:255|email:rfc,dns',
        //     'customerEmail2' => 'required|max:255|email:rfc,dns|same:customerEmail1',
        //     'customerPhoneNum' => 'required|max:20|regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
        //     'customerPhoneType' => 'required|exists:PHONE_TYPE_LOV,PHONE_TYPE',
        //     'customerJumpDate' => 'required|date',
        //     'customerMediaSelection' => 'required|exists:MEDIA_TYPE_LOV,MEDIA_TYPE',
        //     'mediaTermsAckRadio' => 'required',
        //     'usbCheck' => 'nullable|required_if:mediaTermsAckRadio, "No"',
        //     'deliveryTimeAck' => 'required'

        // ]);


 
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
        return view('thanks', ["request"=> $request,"resultMessage"=> $result]);

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
