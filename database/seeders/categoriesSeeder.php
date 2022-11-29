<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\db;
use App\Models\categories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Fantasy'
        ]);
        DB::table('categories')->insert([
            'name' => 'Romance'
        ]);
        DB::table('categories')->insert([
            'name' => 'Education'
        ]);
        DB::table('categories')->insert([
            'name' => 'Religion'
        ]);
    }
}
