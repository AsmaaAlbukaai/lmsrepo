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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('questions');
            $table->string('true_ans');
            $table->integer('mark')->default('1');
            $table->foreignId('tasks_Id')
                ->constrained('tasks');
            $table->foreignId('on_line_courses_Id')
                ->constrained('on_line_courses');
            $table->foreignId('added_places_Id')
                ->constrained('added_places');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quastions');
    }
};
