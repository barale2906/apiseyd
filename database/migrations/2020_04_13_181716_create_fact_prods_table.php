<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_prods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('facp_nom');
            $table->longText('facp_des');
            $table->unsignedBigInteger('facp_tipo');
            $table->boolean('facp_est')->default(true);

            $table->foreign('facp_tipo')
            ->references('id')
            ->on('fact_tip_prods');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fact_prods');
    }
}
