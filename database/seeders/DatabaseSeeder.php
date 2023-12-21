<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Book::factory(1000)->create();

        // \App\Models\Author::factory(1000)->create();

        $bookIds = Book::pluck('id')->all();
        $authorIds = Author::pluck('id')->all();
    }
}
