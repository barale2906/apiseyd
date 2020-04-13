<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('dot_nomb')->unique();
            $table->longText('dot_descr');
            $table->boolean('dot_est')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotacions');
    }
}
