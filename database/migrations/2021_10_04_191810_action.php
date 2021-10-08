<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Action extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo');
            $table->bigInteger('city');
            $table->string('address');
            $table->string('time');
            $table->bigInteger('author');
            $table->bigInteger('views');
            $table->bigInteger('share');
            $table->bigInteger('takePart');
            $table->boolean('active');
            $table->rememberToken();
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
        //
    }
}
