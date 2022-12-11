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
     Schema::create('ejemplares', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->bigInteger('libro_id')->unsigned();
         $table->Integer('numjemplares');
         $table->timestamps();

         $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
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
