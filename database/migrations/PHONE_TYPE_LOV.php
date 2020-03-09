<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneTypeLovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PHONE_TYPE_LOV', function (Blueprint $table) {
            $table->string('PHONE_TYPE');
            $table->string('PHONE_TYPE_DESCRIPTION');
            $table->date('Creation_date');
            $table->date('Last_update_date');
            $table->primary('PHONE_TYPE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PHONE_TYPE_LOV');
    }
}