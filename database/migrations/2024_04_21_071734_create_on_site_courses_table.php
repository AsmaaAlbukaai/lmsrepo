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
        Schema::create('on_site_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('student_num');
            $table->foreignId('details_Id')->constrained('details');
            $table->foreignId('countries_Id')->constrained('countries');
            $table->foreignId('cities_Id')->constrained('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('on_site_courses');
    }
};
