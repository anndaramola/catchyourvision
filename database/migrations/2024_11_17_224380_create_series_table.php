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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('series_name')->unique();
            $table->string('series_description');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->foreignId('creator_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('event_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
            $table->foreignId('series_id')->constrained('series')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
        Schema::dropIfExists('event_series');
    }
};
