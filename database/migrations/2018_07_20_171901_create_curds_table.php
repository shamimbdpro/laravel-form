<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('username',150);
            $table->string('email',20);
            $table->string('pass',30);
            $table->string('roll',30);
            $table->string('gender',255);
            $table->string('sub',255);
            $table->string('country',255);
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
        Schema::dropIfExists('curds');
    }
}
