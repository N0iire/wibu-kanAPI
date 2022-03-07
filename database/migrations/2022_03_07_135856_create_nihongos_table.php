<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNihongosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nihongos', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_type');
            $table->string('section');
            $table->string('material');
            $table->string('hiragana');
            $table->string('romaji');
            $table->string('english');
            $table->string('indonesia');
            $table->text('explanation');
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
        Schema::dropIfExists('nihongos');
    }
}
