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
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
        ]);*/

        Book::create([
           
            'bookName' => 'Advance Web',
            'bookCode' => 'AW1239823',
            'bookAuthor' => 'Mui Thi Bui',
        ],
        [
           
            'bookName' => 'OOP',
            'bookCode' => 'OOP12398',
            'bookAuthor' => 'La Van Khe',
        ],
        [
           
            'bookName' => 'Database',
            'bookCode' => 'DB23338',
            'bookAuthor' => 'Nguyen Thi An',
        ],
        [
           
            'bookName' => 'OS',
            'bookCode' => 'OS13398',
            'bookAuthor' => 'James Cook',
        ]);
    }
}
