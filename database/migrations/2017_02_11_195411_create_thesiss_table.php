<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('thesiss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('clasification');
            $table->string('title');
            
            $table->string('edition');
            //Descripcion fisica de la tesis
            $table->string('extension');
            $table->integer('nhojas');
            $table->string('physicalDetails');
            $table->string('dimensions');
            $table->string('accompaniment');
            $table->string('location');
            $table->string('publicationLocation');
            $table->string('summary');
            $table->string('conten');
            $table->string('recomendacion');
            $table->string('bibliografia');
            $table->string('asesor');
            //fin descripcion fisica
            $table->timestamps();
           // $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thesiss');
    }
}
