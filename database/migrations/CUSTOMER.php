<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CUSTOMER', function (Blueprint $table) {
            $table->bigIncrements('CUSTOMER_ID')->primary();
            $table->string('FIRST_NAME', 1000);
            $table->string('LAST_NAME', 1000);
            $table->string('EMAIL_ADDRESS', 500);
            $table->string('PHONE_NUMBER', 50);
            $table->longText('PHONE_TYPE', 50);
            $table->foreign('PHONE_TYPE')->references('PHONE_TYPE')->on('PHONE_TYPE_LOV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CUSTOMER');
    }
}