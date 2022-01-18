<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',75)->nullable();
            $table->string('apartmannumarasi', 150)->nullable();
            $table->string('bloknumarasi',20)->nullable();
            $table->string('odasayisi',20)->nullable();
            $table->string('kartnumarasi', 150)->nullable();
            $table->string('guvenliknumarasi', 150)->nullable();
            $table->string('kira', 150)->nullable();
            $table->string('aidat', 150)->nullable();
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
        Schema::dropIfExists('payments');
    }
}
