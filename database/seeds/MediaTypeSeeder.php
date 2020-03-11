<?php
//added Carbon for ease of getting/formatting date and time variables
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MediaTypeSeeder extends Seeder
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
        DB::table('MEDIA_TYPE_LOV')->insert([
            'MEDIA_TYPE' => 'VIDEO',
            'MEDIA_TYPE_DESCRIPTION' => 'Video Only',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Insert PHOTO type       
        DB::table('MEDIA_TYPE_LOV')->insert([
            'MEDIA_TYPE' => 'PHOTOS',
            'MEDIA_TYPE_DESCRIPTION' => 'Photos Only',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        // Insert VIDEO AND STILLS type       
        DB::table('MEDIA_TYPE_LOV')->insert([
            'MEDIA_TYPE' => 'VIDEO+PHOTOS',
            'MEDIA_TYPE_DESCRIPTION' => 'Video and Photos',
            'CREATION_DATE' => $currenttime,
            'LAST_UPDATE_DATE' => $currenttime
        ]);

        
    }
}
