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
        Schema::create('dclasificaciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('libros_id')->unsigned();
            $table->bigInteger('clasificaciones_id')->unsigned();
            $table->timestamps();

            $table->foreign('libros_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('clasificaciones_id')->references('id')->on('clasificaciones')->onDelete('cascade');

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
