<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{


    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('auther');
            $table->text('description');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

      public function down()
    {
        Schema::dropIfExists('books');
    }
}
