<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
         $this->call(PhoneTypeSeeder::class);
         $this->call(MediaTypeSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(CustomerMediaSeeder::class);

    }
}
