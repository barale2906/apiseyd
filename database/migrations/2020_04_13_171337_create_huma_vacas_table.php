<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumaVacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huma_vacas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->date('humVac_fecSalPro');
            $table->date('humVac_fecSal')->nullable();
            $table->date('humVac_fecLlePro');
            $table->date('humVac_fecLle')->nullable();
            $table->boolean('humVac_est')->default(false);

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
        Schema::dropIfExists('huma_vacas');
    }
}
