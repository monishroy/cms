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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('bio')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('image');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->enum('role',['admin','student','teacher','librarian'])->default('student');
            $table->boolean('status')->default(1);
            $table->string('expire_otp')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('users');
    }
};
