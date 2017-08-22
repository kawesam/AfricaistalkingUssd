<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUssdMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapidussd_menus', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->integer('type')->default(1);
            $table->integer('is_parent')->default(0);
            $table->string('confirmation_message');
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
        Schema::drop('rapidussd_menus');
    }

}
