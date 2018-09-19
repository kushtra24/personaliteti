<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_id');
            $table->tinyInteger('value');
            // $table->tinyInteger('m3')->nullable();
            // $table->tinyInteger('m2')->nullable();
            // $table->tinyInteger('m1')->nullable();
            // $table->tinyInteger('n0')->nullable();
            // $table->tinyInteger('p1')->nullable();
            // $table->tinyInteger('p2')->nullable();
            // $table->tinyInteger('p3')->nullable();
            
            $table->string('testee')->nullable();

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
        Schema::dropIfExists('answers');
    }
}
