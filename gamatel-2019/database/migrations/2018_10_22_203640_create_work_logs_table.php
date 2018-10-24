<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_os');
            $table->foreign('id_os')->references('id')->on('os');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('log');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_logs');
    }
}
