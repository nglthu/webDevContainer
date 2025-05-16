<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       /*
        User::factory()->create([
            'name' => 'Test User 2025 at 8.10 pm',
            'email' => 'test2@example2025.com',
        ]);*/

        Book::create([
           
            'bookName' => 'Book cua ban Bun',
            'bookCode' => 'Ban Bun Test Book',
            'bookAuthor' => 'Bun',
        ]
        );
    }
}
