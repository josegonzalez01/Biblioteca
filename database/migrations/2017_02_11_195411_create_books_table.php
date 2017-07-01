<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clasification')->unique();
            $table->string('title');
            $table->string('secondaryTitle');
            $table->longText('summary');
            $table->string('isbn');
            //Descripcion fisica del libro
            $table->string('extension');
            $table->string('physicalDetails')->nullable();
            $table->string('dimensions');
            $table->string('accompaniment')->nullable();
            $table->unsignedSmallInteger('relationBook')->nullable();
            $table->unsignedTinyInteger('edition');
            $table->string('libraryLocation');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}