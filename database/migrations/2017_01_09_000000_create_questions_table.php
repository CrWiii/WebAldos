<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration{
    public function up(){
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->longText('answer');
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

        });
    }

    public function down(){
        Schema::dropIfExists('questions');
    }
}
