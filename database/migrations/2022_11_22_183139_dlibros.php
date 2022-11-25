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
        Schema::create('dlibros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('escritores_id')->unsigned();

            $table->timestamps();

            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('escritores_id')->references('id')->on('escritores')->onDelete('cascade');

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
