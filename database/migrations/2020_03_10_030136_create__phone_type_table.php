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
        Schema::create('_phone_type', function (Blueprint $table) {
            $table->string('PHONE_TYPE');
            $table->string('PHONE_TYPE_DESCRIPTION');
            $table->date('Creation_date');
            $table->date('Last_update_date');
            $table->primary('PHONE_TYPE');
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
        Schema::dropIfExists('_phone_type');
    }
}
