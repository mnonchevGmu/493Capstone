<?php
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
        // $table->bigIncrements('PHONE_ID');
        // $table->string('PHONE_TYPE');
        // $table->string('PHONE_TYPE_DESCRIPTION');
        // $table->date('CREATION_DATE');
        // $table->date('LAST_UPDATE_DATE');
        // $table->timestamps();
        // Date and time of creation
        $currenttime =Carbon::now();
        // Insert CEll type       
        DB::table('PHONE_TYPE')->insert([
            'PHONE_TYPE' => 'CELL',
            'PHONE_TYPE_DESCRIPTION' => 'Cell Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Insert HOME type       
        DB::table('PHONE_TYPE')->insert([
            'PHONE_TYPE' => 'HOME',
            'PHONE_TYPE_DESCRIPTION' => 'Home Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        
        // Insert WORK type       
        DB::table('PHONE_TYPE')->insert([
            'PHONE_TYPE' => 'WORK',
            'PHONE_TYPE_DESCRIPTION' => 'Work Phone',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

       
    }
}
