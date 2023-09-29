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
        Schema::create('employee_academic_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('academic_exam_id')->constrained()->onDelete('cascade');
            $table->string('passing_year');
            $table->foreignId('board_id')->constrained()->onDelete('cascade');
            $table->string('roll');
            $table->string('reg_no');
            $table->string('gpa');
            $table->string('marksheet');
            $table->string('certificate');
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
        Schema::dropIfExists('employee_academic_infos');
    }
};
