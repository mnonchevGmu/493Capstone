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

         DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 2,
            'SKYDIVE_DATE' => '2019-03-11 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 3,
            'SKYDIVE_DATE' => '2020-01-20 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 4,
            'SKYDIVE_DATE' => '2020-03-12 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 0,
            'USB_REQUIRED_ACK' => 1,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 5,
            'SKYDIVE_DATE' => '2020-02-24 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 6,
            'SKYDIVE_DATE' => '2019-12-24 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 7,
            'SKYDIVE_DATE' => '2019-11-19 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 8,
            'SKYDIVE_DATE' => '2020-01-05 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 9,
            'SKYDIVE_DATE' => '2020-01-09 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 10,
            'SKYDIVE_DATE' => '2019-09-03 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 11,
            'SKYDIVE_DATE' => '2019-10-09 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 12,
            'SKYDIVE_DATE' => '2019-10-20 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        DB::table('CUSTOMER_MEDIA')->insert([
            'CUSTOMER_ID' => 13,
            'SKYDIVE_DATE' => '2019-07-20 10:00:00',
            'DELIVERY_TIME_ACK' => 1,
            'MEDIA_TERMS_ACK' => 1,
            'USB_REQUIRED_ACK' => 0,
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);
    }
    }

