<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // futsal, badminton, basketball, tennis, etc.
            $table->string('location');
            $table->decimal('price_per_hour', 10, 2);
            $table->foreignId('owner_id')->constrained('users')->cascadeOnDelete();
            $table->enum('status', ['active', 'inactive', 'maintenance'])->default('active');
            $table->json('metadata')->nullable(); // extra info: facilities, dimensions, images, etc.
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
