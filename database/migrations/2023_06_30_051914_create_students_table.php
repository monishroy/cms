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
            $table->string('fname');
            $table->string('lname');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('image');
            $table->string('email');
            $table->string('roll');
            $table->string('registration');
            $table->string('dob');
            $table->string('gender');
            $table->string('phone');
            $table->string('guardian_phone');
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->foreignId('session_id')->constrained()->onDelete('cascade');
            $table->foreignId('semister_id')->constrained()->onDelete('cascade');
            $table->foreignId('blood_group_id')->constrained()->onDelete('cascade');
            $table->string('nationality');
            $table->foreignId('division_id')->constrained()->onDelete('cascade');
            $table->foreignId('district_id')->constrained()->onDelete('cascade');
            $table->foreignId('upazila_id')->constrained()->onDelete('cascade');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->enum('status',['0','1','2'])->default('0');
            $table->foreignId('user_id')->constrained();
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
