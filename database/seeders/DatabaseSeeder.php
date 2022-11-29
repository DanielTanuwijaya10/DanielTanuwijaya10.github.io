<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\db;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(categoriesSeeder::class);
        $this->call(booksSeeder::class);
        $this->call(books_categories_seeder::class);
        $this->call(publishersSeeder::class);


    }
}
