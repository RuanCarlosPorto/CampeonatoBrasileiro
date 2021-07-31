<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function(Blueprint $table) {
            $table->id();
            $table->integer('team_id');
            $table->integer('points')->default('0');
            $table->integer('games')->default('0');
            $table->integer('victories')->default('0');
            $table->integer('draws')->default('0');
            $table->integer('loses')->default('0');
            $table->integer('goals_pro')->default('0');
            $table->integer('goals_against')->default('0');
            $table->integer('goals_dif')->default('0');
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
        //
    }
}
