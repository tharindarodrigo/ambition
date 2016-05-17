<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('educational_goal');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::drop('educational_goals');
    }
}
