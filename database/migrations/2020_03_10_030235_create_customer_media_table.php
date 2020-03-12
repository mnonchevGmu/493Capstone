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
    	Schema::disableForeignKeyConstraints();
        Schema::create('CUSTOMER_MEDIA', function (Blueprint $table) {
            $table->bigIncrements('CUSTMED_ID');
            $table->bigInteger('CUSTOMER_ID')->unsigned();
            $table->date('SKYDIVE_DATE');
            $table->boolean('DELIVERY_TIME_ACK');
            $table->boolean('MEDIA_TERMS_ACK');
            $table->boolean('USB_REQUIRED_ACK');
            $table->bigInteger('MEDIA_ID')->unsigned();
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('CUSTOMERS');
            $table->foreign('MEDIA_ID')->references('MEDIA_ID')->on('MEDIA_TYPE');
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
        Schema::dropIfExists('CUSTOMER_MEDIA');
        Schema::enableForeignKeyConstraints();
    }
}
