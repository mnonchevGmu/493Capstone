<?php
//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'John',
            'LAST_NAME' => 'Smith',
            'EMAIL_ADDRESS' => 'jsmith@googly.com',
            'PHONE_NUMBER' => '703-777-9393',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);
        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Mario',
            'LAST_NAME' => 'Ripa',
            'EMAIL_ADDRESS' => 'mripa@yahoo.com',
            'PHONE_NUMBER' => '540-672-5054',
            'PHONE_TYPE' => 'WORK',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Pam',
            'LAST_NAME' => 'Young',
            'EMAIL_ADDRESS' => 'pyoung@hotmail.com',
            'PHONE_NUMBER' => '202-437-6578',
            'PHONE_TYPE' => 'HOME',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Whitney',
            'LAST_NAME' => 'Payne',
            'EMAIL_ADDRESS' => 'wpayne@gmail.com',
            'PHONE_NUMBER' => '703-456-0494',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Ben',
            'LAST_NAME' => 'Shank',
            'EMAIL_ADDRESS' => 'bshank@skydiveorange.com',
            'PHONE_NUMBER' => '571-908-3940',
            'PHONE_TYPE' => 'HOME',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Lauren',
            'LAST_NAME' => 'Conway',
            'EMAIL_ADDRESS' => 'lconway@yahoo.com',
            'PHONE_NUMBER' => '703-495-3748',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Brad',
            'LAST_NAME' => 'Cohen',
            'EMAIL_ADDRESS' => 'bcohen@gmail.com',
            'PHONE_NUMBER' => '571-890-2749',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Chris',
            'LAST_NAME' => 'Whitley',
            'EMAIL_ADDRESS' => 'cwhitley@verizon.net',
            'PHONE_NUMBER' => '540-876-2744',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Kat',
            'LAST_NAME' => 'Osipova',
            'EMAIL_ADDRESS' => 'kosipova@msn.com',
            'PHONE_NUMBER' => '202-345-8593',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Jon',
            'LAST_NAME' => 'Stotts',
            'EMAIL_ADDRESS' => 'jstotts@aol.com',
            'PHONE_NUMBER' => '540-384-3380',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Rose',
            'LAST_NAME' => 'Smith',
            'EMAIL_ADDRESS' => 'rsmith@usmc.com',
            'PHONE_NUMBER' => '703-289-4749',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'Kevin',
            'LAST_NAME' => 'Haugh',
            'EMAIL_ADDRESS' => 'khaugh@usmc.com',
            'PHONE_NUMBER' => '571-859-3849',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert VIDEO type       
        DB::table('CUSTOMERS')->insert([
            'FIRST_NAME' => 'John',
            'LAST_NAME' => 'Lighthall',
            'EMAIL_ADDRESS' => 'jlighthall@gmail.com',
            'PHONE_NUMBER' => '540-374-3948',
            'PHONE_TYPE' => 'CELL',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);
    }
}
