<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('email', 72);
            $table->string('image', 100)->default('1.png')->nullable();
            $table->enum('gender', ["M","F","O"])->nullable();
            $table->string('roll')->nullable();
            $table->string('registration')->nullable();
            $table->string('password');
            $table->date('dob')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('students');
    }
};
