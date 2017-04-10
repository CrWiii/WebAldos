<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventImagesTable extends Migration{
    public function up(){
        Schema::create('event_images', function (Blueprint $table) {
            $table->integer('event_id')->unsigned()->index();
            $table->integer('images_id')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('events');
    }
}
