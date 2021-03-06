<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('finaltype');
            $table->string('intro_extro');
            $table->tinyInteger('first_final_procent_rez');
            $table->string('intu_sens');
            $table->tinyInteger('ns_final_procent_rez');
            $table->string('feeling_thinking');
            $table->tinyInteger('ft_final_procent_rez');
            $table->string('judging_perspecting');
            $table->tinyInteger('jp_final_procent_rez');
            $table->string('rol_name')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
