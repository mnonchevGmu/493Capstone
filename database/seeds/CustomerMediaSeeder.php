<?php
//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomerMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
         // Date and time of creation
         $currenttime =Carbon::now();
         // Insert VIDEO type  
         //TODO: Need to figure out how to better reference customer_id values instead of hard coding     
         DB::table('CUSTOMER_MEDIA')->insert([
             'CUSTOMER_ID' => 1,
             'SKYDIVE_DATE' => '2018-10-27 10:00:00',
             'DELIVERY_TIME_ACK' => 1,
             'MEDIA_TERMS_ACK' => 1,
             'USB_REQUIRED_ACK' => 0,
             'MEDIA_TYPE' => 'VIDEO',
             'CREATION_DATE' => $currenttime,
             'LAST_UPDATE_DATE' => $currenttime
         ]);
    }
}
