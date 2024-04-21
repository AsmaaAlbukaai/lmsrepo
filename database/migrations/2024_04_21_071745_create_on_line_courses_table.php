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
        Schema::create('on_line_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('age_allowed');
            $table->string('type');
            $table->foreignId('details_Id')->constrained('details');
            $table->foreignId('sections_Id')->constrained('sections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('on_line_courses');
    }
};
