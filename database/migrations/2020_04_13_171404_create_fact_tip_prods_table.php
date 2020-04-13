<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactTipProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_tip_prods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('factp_nom');
            $table->longText('factp_des');
            $table->boolean('factp_est')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fact_tip_prods');
    }
}
