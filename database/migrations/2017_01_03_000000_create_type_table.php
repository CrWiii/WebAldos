<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTable extends Migration{
    public function up(){
        Schema::create('type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('images_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('images_id_frame')->unsigned()->index();
            $table->boolean('frame')->nulleable();
            $table->string('slug')->nulleable();
            
            $table->timestamps();

            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('images_id_frame')->references('id')->on('images')->onDelete('cascade');
        });
    }
    public function down(){
        Schema::dropIfExists('type');
    }
}
