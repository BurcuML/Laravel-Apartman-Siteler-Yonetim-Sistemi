<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('user_id', 150);
            $table->string('name',75)->nullable();
            $table->string('apartman',20)->nullable();
            $table->string('subject', 150);
            $table->string('review', 150);
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
        Schema::dropIfExists('revies');
    }
}
