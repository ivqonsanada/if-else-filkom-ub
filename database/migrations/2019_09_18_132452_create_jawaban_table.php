<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('nim');
            $table->string ( 'q1');
            $table->string ( 'q2');
            $table->string ( 'q3');
            $table->string ( 'q4');
            $table->string ( 'q5');
            $table->string ( 'q6');
            $table->string ( 'q7');
            $table->string ( 'q8');
            $table->string ( 'q9');
            $table->string ('q10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
