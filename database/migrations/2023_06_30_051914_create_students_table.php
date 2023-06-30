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
            $table->string('fname', 30);
            $table->string('lname', 30);
            $table->integer('roll');
            $table->integer('registration');
            $table->enum('gender', ["M", "F", "O"]);
            $table->string('session');
            $table->string('phone');
            $table->string('gPhone');
            $table->string('semister');
            $table->text('address');
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
