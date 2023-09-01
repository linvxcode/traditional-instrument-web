<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_audio', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('c_audio_path_1')->nullable();
            $table->string('d_audio_path_2')->nullable();
            $table->string('e_audio_path_3')->nullable();
            $table->string('f_audio_path_4')->nullable();
            $table->string('g_audio_path_5')->nullable();
            $table->string('a_audio_path_6')->nullable();
            $table->string('b_audio_path_7')->nullable();
            $table->string('cc_audio_path_8')->nullable();
            $table->string('dd_audio_path_9')->nullable();
            $table->string('ff_audio_path_10')->nullable();
            $table->string('gg_audio_path_11')->nullable();
            $table->string('aa_audio_path_12')->nullable();
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
        Schema::dropIfExists('instrument_audio');
    }
}
