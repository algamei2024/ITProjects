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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('abstract');
            $table->text('team')->nullable();
            $table->string('evaluation');// التقيي م
            $table->string('pdf');
            $table->string('image');
            $table->boolean('confirmed')->default(false);
            $table->foreignId('program_id')->constrained('programs')->cascadeOnDelete();
            $table->foreignId('year_id')->constrained('years')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
