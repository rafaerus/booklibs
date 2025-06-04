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
                //cover img
            $table->string('cover_image')->nullable();
            //file path
            $table->string('file_path')->nullable();
            //created at
            $table->timestamp('created_at')->nullable();
            //updated at
            $table->timestamp('updated_at')->nullable();
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
