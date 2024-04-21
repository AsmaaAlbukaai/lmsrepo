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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('notification_token');
            $table->integer('age');
            $table->foreignId('users_Id')->constrained('users')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('countries_Id')->constrained('countries')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cities_Id')->constrained('cities')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
