<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFramesTable extends Migration{
    public function up(){
        Schema::create('frames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('frame_type');
            $table->integer('images_id')->nullable();
            $table->boolean('isVideo')->nullable();
            $table->string('video_route')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

        });
    }

    public function down(){
        Schema::dropIfExists('frames');
    }
}