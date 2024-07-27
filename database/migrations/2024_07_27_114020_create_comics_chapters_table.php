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
        Schema::create('comics_chapters', function (Blueprint $table) {
            $table->id();
            $table->integer('chapter_number');
            $table->timestamps();
            $table->foreignId('comic_id')->constrained(
                table: 'comics',
                indexName: 'comics_chapter_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics_chapters');
    }
};
