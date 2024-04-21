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
        Schema::create('interactives', function (Blueprint $table) {
            $table->id();
            $table->boolean('like')->nullable();
            $table->text('comment')->nullable();
            $table->foreignId('user_videos_Id')->constrained('user_videos')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interactives');
    }
};
