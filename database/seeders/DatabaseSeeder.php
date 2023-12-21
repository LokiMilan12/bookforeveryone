<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * book seeder
         */
        // \App\Models\Book::factory(1000)->create();

        /**
         * author seeder
         */
        // \App\Models\Author::factory(1000)->create();

        /**
         * author_book pivot table seeder start
         */
        // $faker = Faker::create();
        // $bookIds = Book::pluck('id')->all();
        // $authorIds = Author::pluck('id')->all();
        
        // foreach($bookIds as $bookId) {
        //     $numberOfAuthors = $faker->numberBetween(1, 3);

        //     $selectedAuthors = $faker->randomElements($authorIds, $numberOfAuthors);
        //         foreach ($selectedAuthors as $authorId) {
        //             DB::table('author_book')->insert([
        //                 'book_id' => $bookId,
        //                 'author_id' => $authorId,
        //             ]); 
        //         }   
        //     }
        /**
         * author_book pivot table seeder end
         */

        }
    }