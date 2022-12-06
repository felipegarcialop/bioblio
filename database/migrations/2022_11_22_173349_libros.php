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
            $table->Integer('anio_pub');
            $table->bigInteger('editorial_id')->unsigned();
            $table->bigInteger('clasificaciones_id')->unsigned();
            $table->bigInteger('escritores_id')->unsigned();
            
            
            $table->timestamps();

            $table->foreign('clasificaciones_id')->references('id')->on('clasificaciones')->onDelete('cascade');
            $table->foreign('editorial_id')->references('id')->on('editoriales')->onDelete('cascade');
           
           

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
