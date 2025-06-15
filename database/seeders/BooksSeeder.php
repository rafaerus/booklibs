<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Psychology of Money',
                'author' => 'Morgan Housel',
                'category_id' => 5, // Psychology
                'description' => 'Timeless lessons on wealth, greed, and happiness.',
                'cover_image' => null,
                'file_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'category_id' => 5, // Psychology
                'description' => 'An Easy & Proven Way to Build Good Habits & Break Bad Ones.',
                'cover_image' => null,
                'file_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'A Brief History of Time',
                'author' => 'Stephen Hawking',
                'category_id' => 3, // Science
                'description' => 'From the Big Bang to Black Holes.',
                'cover_image' => null,
                'file_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'category_id' => 4, // Technology
                'description' => 'A Handbook of Agile Software Craftsmanship.',
                'cover_image' => null,
                'file_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Steve Jobs',
                'author' => 'Walter Isaacson',
                'category_id' => 7, // Biography
                'description' => 'The exclusive biography.',
                'cover_image' => null,
                'file_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
