<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
HEAD:database/migrations/2020_03_10_030136_create__phone_type_table.php
        Schema::create('_phone_type', function (Blueprint $table) {
            $table->string('PHONE_TYPE');
            $table->string('PHONE_TYPE_DESCRIPTION');
            $table->date('Creation_date');
            $table->date('Last_update_date');
            $table->primary('PHONE_TYPE');

        Schema::create('PHONE_TYPE', function (Blueprint $table) {
       		$table->bigIncrements('PHONE_ID');
            $table->string('PHONE_TYPE');
            $table->string('PHONE_TYPE_DESCRIPTION');
            $table->date('CREATION_DATE');
            $table->date('LAST_UPDATE_DATE');
 70dcaedc65044b6493585249b34f501444d9474b:database/migrations/2020_03_10_030136_create_phone_type_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PHONE_TYPE');
    }
}
