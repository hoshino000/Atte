<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakTimeTable extends Migration
{
    public function up()
    {
        Schema::create('break', function (Blueprint $table) {
            $table->bigIncrements('break_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('break_start');
            $table->dateTime('break_end')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('break');
    }
}
