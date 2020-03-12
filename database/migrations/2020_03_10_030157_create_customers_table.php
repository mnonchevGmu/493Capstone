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
HEAD:database/migrations/2020_03_10_030157_create__customers_table.php
            $table->string('PHONE_TYPE')->unsigned();
            $table->foreign('PHONE_TYPE')->references('PHONE_TYPE')->on('_phone_type');

            $table->bigInteger('PHONE_ID')->unsigned();
            $table->foreign('PHONE_ID')->references('PHONE_ID')->on('PHONE_TYPE');
70dcaedc65044b6493585249b34f501444d9474b:database/migrations/2020_03_10_030157_create_customers_table.php
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
