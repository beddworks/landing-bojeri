<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->enum('type', ['article', 'announcement', 'promo'])->default('article');
            $table->foreignId('related_field_id')->nullable()->constrained('fields')->nullOnDelete();
            $table->json('availability_metadata')->nullable(); // updated by BookingContentStitchService
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->index(['type', 'published_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
