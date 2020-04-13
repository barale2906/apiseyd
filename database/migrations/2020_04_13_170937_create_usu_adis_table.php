<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuAdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_adis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->longText('usAd_dir');
            $table->string('usAd_tel');
            $table->string('usAd_eps');
            $table->string('usAd_pens');
            $table->string('usAd_cesa');
            $table->string('usAd_tipCon');
            $table->boolean('usAd_est')->default(true);

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
        Schema::dropIfExists('usu_adis');
    }
}
