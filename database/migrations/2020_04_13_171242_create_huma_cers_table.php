<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumaCersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huma_cers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->date('humCer_fecgen');
            $table->unsignedBigInteger('humCer_usufir');
            $table->integer('humCer_tipcer');
            $table->unsignedBigInteger('humCer_idsal');
            $table->unsignedBigInteger('humCer_usuGen');

            $table->foreign('usu_id')
                ->references('id')
                ->on('users');

            $table->foreign('humCer_usufir')
                ->references('id')
                ->on('users');

            $table->foreign('humCer_idsal')
                ->references('id')
                ->on('usu_sals');

            $table->foreign('humCer_usuGen')
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
        Schema::dropIfExists('huma_cers');
    }
}
