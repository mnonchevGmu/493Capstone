<?php
//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PhoneTypeSeeder extends Seeder
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
        // Insert CEll type       
        DB::table('PHONE_TYPE_LOV')->insert([
            'PHONE_TYPE' => 'CELL',
            'PHONE_TYPE_DESCRIPTION' => 'Cell Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Insert HOME type       
        DB::table('PHONE_TYPE_LOV')->insert([
            'PHONE_TYPE' => 'HOME',
            'PHONE_TYPE_DESCRIPTION' => 'Home Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        
        // Insert WORK type       
        DB::table('PHONE_TYPE_LOV')->insert([
            'PHONE_TYPE' => 'WORK',
            'PHONE_TYPE_DESCRIPTION' => 'Work Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

       
    }
}
