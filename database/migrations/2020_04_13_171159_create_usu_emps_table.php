<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_emps', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('usu_id');
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('ciu_id');
            $table->boolean('usEmp_princ')->default(false);
            $table->boolean('usEmp_est')->default(true);


            $table->foreign('usu_id')
                ->references('id')
                ->on('users');

            $table->foreign('emp_id')
                ->references('id')
                ->on('empresas');

            $table->foreign('rol_id')
                ->references('id')
                ->on('rols');

            $table->foreign('ciu_id')
                ->references('id')
                ->on('ciudads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usu_emps');
    }
}
