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
        Schema::create('CUSTOMERS', function (Blueprint $table) {
            $table->bigIncrements('CUSTOMER_ID');
            $table->string('FIRST_NAME');
            $table->string('LAST_NAME');
            $table->string('EMAIL_ADDRESS');
            $table->string('PHONE_NUMBER');
            $table->bigInteger('PHONE_ID')->unsigned();
            $table->foreign('PHONE_ID')->references('PHONE_ID')->on('PHONE_TYPE');
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
        Schema::dropIfExists('CUSTOMERS');
        Schema::enableForeignKeyConstraints();
    }
}
