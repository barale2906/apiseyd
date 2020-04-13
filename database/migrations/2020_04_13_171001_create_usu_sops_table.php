<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuSopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_sops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->string('usSop_nomDoc');
            $table->string('usSop_ruta')->nullable();
            $table->date('usSop_venci');
            $table->date('usSop_exp');
            $table->date('usSop_cargue')->nullable();
            $table->boolean('usSop_est')->default(true);

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
        Schema::dropIfExists('usu_sops');
    }
}
