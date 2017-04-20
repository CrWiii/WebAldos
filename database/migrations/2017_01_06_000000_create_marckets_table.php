<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcketsTable extends Migration{
    public function up(){
        Schema::create('Marckets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('address');
            $table->integer('images_id')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('Marckets');
    }
}
