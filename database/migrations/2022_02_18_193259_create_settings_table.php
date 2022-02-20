<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('mainurl');
            $table->string('email');
            $table->text('description');
            $table->string('logo');
            $table->string('address');
            $table->string('phone');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('flickr')->nullable();
            $table->string('pinterest')->nullable();
            $table->foreignId('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('lat',20,10)->nullable();
            $table->double('lng',20,10)->nullable();
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
        Schema::dropIfExists('settings');
    }
};
