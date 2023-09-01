<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_latihan_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('question');
            $table->string('audio_quest')->nullable();
            $table->string('answer');
            $table->string('essay');
            $table->string('essay2');
            $table->string('essay3');
            $table->string('serune_kalee')->nullable();
            $table->string('geundrang')->nullable();
            $table->string('rapai')->nullable();
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('e')->nullable();
            $table->string('f')->nullable();
            $table->string('g')->nullable();
            $table->string('a')->nullable();
            $table->string('b')->nullable();
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
        Schema::dropIfExists('latihans');
    }
}
