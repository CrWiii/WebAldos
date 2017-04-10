<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration{

    public function up(){
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->longText('content')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('events');
    }
}
