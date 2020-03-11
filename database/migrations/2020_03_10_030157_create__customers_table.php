<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::disableForeignKeyConstraints();
        Schema::create('_customers', function (Blueprint $table) {
            $table->bigIncrements('Customer_id');
            $table->string('FIRST_NAME');
            $table->string('LAST_NAME');
            $table->string('EMAIL_ADDRESS');
            $table->string('PHONE_NUMBER');
            $table->string('PHONE_TYPE')->unsigned();
            $table->foreign('PHONE_TYPE')->references('PHONE_TYPE')->on('_phone_type');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('_customers');
        Schema::enableForeignKeyConstraints();
    }
}
