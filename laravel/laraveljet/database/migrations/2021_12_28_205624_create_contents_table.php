<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('type',100)->nullable();
            $table->integer('kira',75)->nullable();
            $table->integer('aidat',75)->nullable();
            $table->string('apartmannumarasi',50)->nullable();
            $table->string('duyuru',500)->nullable();
            $table->string('bloknumarasi',50)->nullable();
            $table->integer('menu_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('detail')->nullable();
            $table->string('status', 5)->nullable()->default('False');
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
        Schema::dropIfExists('contents');
    }
}
