<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_media_type', function (Blueprint $table) {
            $table->bigIncrements('media_id');
            $table->string('MEDIA_TYPE');
            $table->string('MEDIA_TYPE_DESCRIPTION');
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
        Schema::dropIfExists('_media_type');
    }
}
