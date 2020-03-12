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
        Schema::create('PHONE_TYPE_LOV', function (Blueprint $table) {
            $table->string('PHONE_TYPE')->primary();
            $table->string('PHONE_TYPE_DESCRIPTION');
            $table->date('CREATION_DATE');
            $table->date('LAST_UPDATE_DATE');
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
        Schema::dropIfExists('PHONE_TYPE_LOV');
    }
}
