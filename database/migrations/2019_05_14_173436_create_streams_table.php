<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('songid')->unsigned();
            $table->foreign('songid')->references('id')->on('songs');
            $table->bigInteger('userid')->unsigned();            
            $table->foreign('userid')->references('id')->on('siteusers');
            $table->integer('streamtime');
            $table->ipAddress('ip');            
            $table->bigInteger('countryid')->unsigned();            
            $table->foreign('countryid')->references('id')->on('countries');           
            
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
        Schema::dropIfExists('streams');
    }
}
