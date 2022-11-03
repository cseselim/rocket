<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRocketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rocket', function (Blueprint $table) {
            $table->id();
            $table->string('rocket_name')->nullable();
            $table->dateTime('rocket_launch_datetime')->nullable();
            $table->dateTime('rocket_back_datetime')->nullable();
            $table->string('initial_spreed')->nullable();
            $table->string('last_spreed')->nullable();
            $table->string('acceleration')->nullable();
            $table->string('linear_spreed_at_empty_space')->nullable();
            $table->string('earth_to_space')->nullable();
            $table->string('space_to_earth')->nullable();
            $table->string('earth_to_space_reach_time')->nullable();
            $table->string('space_earth_to_back_time')->nullable();
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
        Schema::dropIfExists('rocket');
    }
}
