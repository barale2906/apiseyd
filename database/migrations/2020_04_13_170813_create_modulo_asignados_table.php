<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_asignados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('mod_id');
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('usu_id');
            $table->boolean('modAsi_est')->default(true);

            $table->foreign('mod_id')
                ->references('id')
                ->on('modulos');

            $table->foreign('emp_id')
                ->references('id')
                ->on('empresas');

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
        Schema::dropIfExists('modulo_asignados');
    }
}
