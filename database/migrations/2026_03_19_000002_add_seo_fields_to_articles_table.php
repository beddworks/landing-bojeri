<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->after('featured_image');
            $table->string('meta_description', 320)->nullable()->after('meta_title');
            $table->string('meta_keywords')->nullable()->after('meta_description');
            $table->string('og_title')->nullable()->after('meta_keywords');
            $table->string('og_description', 320)->nullable()->after('og_title');
            $table->string('og_image')->nullable()->after('og_description');
            $table->string('canonical_url')->nullable()->after('og_image');
            $table->string('focus_keyword')->nullable()->after('canonical_url');
            $table->enum('robots', ['index,follow', 'noindex,follow', 'index,nofollow', 'noindex,nofollow'])
                ->default('index,follow')
                ->after('focus_keyword');
            $table->json('schema_markup')->nullable()->after('robots');
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn([
                'meta_title',
                'meta_description',
                'meta_keywords',
                'og_title',
                'og_description',
                'og_image',
                'canonical_url',
                'focus_keyword',
                'robots',
                'schema_markup',
            ]);
        });
    }
};
