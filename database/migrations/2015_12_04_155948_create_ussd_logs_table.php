<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUssdLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapidussd_logs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('phone');
            $table->string('text');
            $table->string('session_id');
            $table->string('service_code');
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
        Schema::drop('rapidussd_logs');
    }
}
