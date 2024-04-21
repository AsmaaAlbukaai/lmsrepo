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
        Schema::create('video_call_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_Id')->constrained('users');
            $table->foreignId('video_calls_Id')->constrained('video_calls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_call_users');
    }
};
