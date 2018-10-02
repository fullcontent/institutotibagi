<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizes', function (Blueprint $table) {
            $table->increments('id');


            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->date('dataNasc');
            
            
            $table->unsignedInteger('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprendizes');
    }
}
