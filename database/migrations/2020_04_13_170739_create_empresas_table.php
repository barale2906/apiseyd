<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('emp_nit')->unique();
            $table->string('emp_nomb')->unique();
            $table->longText('emp_dirPrin')->nullable();
            $table->integer('emp_tel')->nullable();
            $table->string('emp_email')->nullable();
            $table->dateTime('emp_fecCie')->nullable();
            $table->string('emp_carpDoc')->nullable();
            $table->string('emp_carIma')->nullable();
            $table->string('emp_logo')->nullable();
            $table->double('emp_wLogo')->nullable();
            $table->double('emp_hLogo')->nullable();
            $table->string('emp_icono')->nullable();
            $table->string('emp_bd')->nullable();
            $table->string('emp_usuBd')->nullable();
            $table->string('emp_contraBd')->nullable();
            $table->unsignedBigInteger('emp_usuid');
            $table->boolean('emp_est')->default(true);

            $table->foreign('emp_usuid')
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
        Schema::dropIfExists('empresas');
    }
}
