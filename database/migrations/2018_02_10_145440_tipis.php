<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->text('shortDescription')->nullable();
            $table->text('hyrje')->nullable();
            $table->text('forcatDobesit')->nullable();
            $table->text('lidhjet')->nullable();
            $table->text('miqesite')->nullable();
            $table->text('siPrinder')->nullable();
            $table->text('profesioni')->nullable();
            $table->text('vendiPunes')->nullable();
            $table->text('shtese')->nullable();
            $table->string('type_img')->nullable();
            $table->string('feat_img')->nullable();
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
        Schema::dropIfExists('tipis');
    }
}
