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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // Title of the book
            $table->string('title');
            // Author of the book
            $table->string('author');
            $table->text('description')->nullable();
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            // Cover image
            $table->string('cover_image')->nullable();
            // File path
            $table->string('file_path')->nullable();
            // Hanya menggunakan timestamps() tanpa mendeklarasikan kolom secara manual
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
