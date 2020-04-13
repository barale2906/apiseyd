<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumaDotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huma_dots', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('dot_id');
            $table->string('dotEnt_talla');
            $table->integer('dotEnt_can');
            $table->unsignedBigInteger('usu_id');
            $table->date('dotEnt_fecEnt')->nullable();
            $table->boolean('dotEnt_est')->default(false);


            $table->foreign('dot_id')
                ->references('id')
                ->on('dotacions');

            $table->foreign('usu_id')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huma_dots');
    }
}
