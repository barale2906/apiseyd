<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuSalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_sals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->double('usSa_salario');
            $table->double('usSa_roda');
            $table->double('usSa_bono');
            $table->double('usSa_comision');
            $table->date('usSa_vigencia');
            $table->boolean('usSa_est')->default(true);

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
        Schema::dropIfExists('usu_sals');
    }
}
