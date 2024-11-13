<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTable extends Migration
{
    public function up()
    {
        Schema::create('work', function (Blueprint $table) {
            $table->bigIncrements('work_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('work_start');
            $table->dateTime('work_end')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('work');
    }
}
