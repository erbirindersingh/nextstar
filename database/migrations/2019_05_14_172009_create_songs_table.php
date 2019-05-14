<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('songname');
            $table->bigInteger('userid')->unsigned();            
            $table->foreign('userid')->references('id')->on('siteusers');
            $table->integer('streamcount');
            $table->integer('playtime');
            $table->string('extension');
            $table->bigInteger('genreid')->unsigned(); 
            $table->foreign('genreid')->references('id')->on('genres');
            $table->boolean('isdeleted');
            $table->bigInteger('albumid')->unsigned();
            $table->foreign('albumid')->references('id')->on('albums');
          
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
        Schema::dropIfExists('songs');
    }
}
