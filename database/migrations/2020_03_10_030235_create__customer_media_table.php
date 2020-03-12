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
        Schema::create('_customer_media', function (Blueprint $table) {
            $table->bigIncrements('CustMed_id');
            $table->bigInteger('CUSTOMER_ID')->unsigned();
            $table->date('SKYDIVE_DATE');
            $table->boolean('DELIVERY_TIME_ACK');
            $table->boolean('MEDIA_TERMS_ACK');
            $table->boolean('USB_REQUIRED_ACK');
            $table->bigInteger('media_id')->unsigned();
            $table->foreign('Customer_id')->references('Customer_id')->on('_customers');
            $table->foreign('media_id')->references('media_id')->on('_media_type');
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
        Schema::dropIfExists('_customer_media');
        Schema::enableForeignKeyConstraints();
    }
}
