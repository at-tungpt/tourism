<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relicsname');
            $table->string('address');
            $table->string('cost');
            $table->string('time');
            $table->string('register');
            $table->string('note');
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
        Schema::drop('relics');
    }
}
