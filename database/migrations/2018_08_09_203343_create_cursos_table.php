<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->text('descritivo')->nullable();
            $table->string('tipo')->nullable();
            $table->text('criterios')->nullable();
            $table->text('area')->nullable();
            $table->text('ementa')->nullable();
            $table->text('processo')->nullable();
            $table->text('duracao')->nullable();
            $table->string('investimento')->nullable();

            $table->text('local')->nullable();
            



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
        Schema::dropIfExists('cursos');
    }
}
