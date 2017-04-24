<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubframesTable extends Migration{
    public function up(){
        Schema::create('subframes', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->integer('images_id')->unsigned()->index();
            $table->integer('frame_id')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('frame_id')->references('id')->on('frames')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('subframes');
    }
}
