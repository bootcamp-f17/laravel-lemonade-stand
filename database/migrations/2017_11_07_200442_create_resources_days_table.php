<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resource_id')->unsigned();
            $table->foreign('resource_id')->references('id')->on('resources');

            $table->integer('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on('days');

            $table->integer('starting_quantity')->unsigned()->default(0);
            $table->integer('ending_quantity')->unsigned()->default(0);
            $table->integer('purchased_quantity')->unsigned()->default(0);

            




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
        Schema::dropIfExists('resources_days');
    }
}
