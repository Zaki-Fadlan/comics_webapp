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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('alternate_title');
            $table->string('title');
            $table->string('slug_title')->unique();
            $table->string('author');
            $table->timestamp('released_at')->nullable();
            $table->string('cover');
            $table->foreignId('type_id')->constrained(
                table: 'comics_types',
                indexName: 'comics_type_id'
            );
            // $table->string('status');
            $table->text('synopsis');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
