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
    }
}
