<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CUSTOMER_MEDIA', function (Blueprint $table) {
            $table->bigIncrements('CUSTOMER_MEDIA_ID')->primary();
            $table->bigInteger('CUSTOMER_ID');
            $table->date('SKYDIVE_DATE');
            $table->boolean('DELIVERY_TIME_ACK');
            $table->boolean('MEDIA_TERMS_ACK');
            $table->boolean('USB_REQUIRED_ACK');
            $table->string('MEDIA_TYPE');
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('CUSTOMER');
            $table->foreign('MEDIA_TYPE')->references('MEDIA_TYPE')->on('MEDIA_TYPE_LOV');
        });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CUSTOMER_MEDIA');
    }
}