<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('on_line_course_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_Id')->constrained('users');
            $table->foreignId('on_line_courses_Id')->constrained('on_line_courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('on_line_course_users');
    }
};
