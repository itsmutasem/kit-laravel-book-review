<?php

namespace Database\Seeders;
use App\Models\Book;

use App\Models\User;use Database\Factories\BookFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory()->count(30)->create();
    }
}
