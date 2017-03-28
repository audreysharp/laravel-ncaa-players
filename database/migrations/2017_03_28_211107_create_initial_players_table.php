<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function(Blueprint $table) {
          $table->increments('id');
          $table->string('first')->default('');
          $table->string('last')->default('');
          $table->integer('gamesPlayed')->default(0);
          $table->integer('avgMinutes')->default(0);
          $table->integer('ppg')->default(0);
          $table->integer('rpg')->default(0);
          $table->integer('apg')->default(0);
          $table->integer('spg')->default(0);
          $table->integer('bpg')->default(0);
          $table->integer('tpg')->default(0);
          $table->integer('rpg')->default(0);
          $table->float('fgPercent', 3, 2)->default(0.00);
          $table->float('ftPercent', 3, 2)->default(0.00);
          $table->float('tpPercent', 3, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
