<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('libros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nom_libro');
            $table->Integer('codigo');
            $table->Integer('anio_pub');
            $table->bigInteger('editorial_id')->unsigned();
            $table->bigInteger('clasificacion_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('editorial_id')->references('id')->on('editoriales')->onDelete('cascade');
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
