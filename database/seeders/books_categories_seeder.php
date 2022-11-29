<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\db;
use App\Models\books_Categories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;


class books_categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books_categories')->insert([
            'books_id' => 1,
            'categories_id' => 1
        ]);

        DB::table('books_categories')->insert([
            'books_id' => 2,
            'categories_id' => 2
        ]);

        DB::table('books_categories')->insert([
            'books_id' => 3,
            'categories_id' => 3
        ]);

        DB::table('books_categories')->insert([
            'books_id' => 4,
            'categories_id' => 4
        ]);

    }
}
