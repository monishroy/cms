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
        Schema::create('technology', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('image1', 80);
            $table->string('image2', 80);
            $table->text('text1');
            $table->text('text2');
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
        Schema::dropIfExists('technology');
    }
};
