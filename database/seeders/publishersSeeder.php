<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\publishers;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class publishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert([
            'name' => 'Bloomsbury Publsihing',
            'address' => '1385 Broadway, Fifth Floor, New York, NY 10018 USA',
            'phone' => '1 212-419-5300',
            'email' => 'contact-usa@bloomsbury.com',
            'image' => 'Storage/Image/bloomsburg_cover.jpeg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('publishers')->insert([
            'name' => 'Mizan Publsihing',
            'address' => 'Jln. Cinambo no. 135 Kota Bandung, Jawa Barat',
            'phone' => '02278343100',
            'email' => 'contact@mizan.com',
            'image' => 'Storage/Image/mizan_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('publishers')->insert([
            'name' => 'TOP G Publsihing',
            'address' => 'CMS Adonnino Ascoli & Cavasola Scamoni Via Agostino Depretis, 8600184 Rome, Italy',
            'phone' => '+3906478151',
            'email' => 'emoryatate@gmail.com',
            'image' => 'Storage/Image/g_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('publishers')->insert([
            'name' => 'Touchstone',
            'address' => 'Block F, Sector 3, Salt Lake, Kolkata',
            'phone' => '1(866) 506-1949.',
            'email' => 'contact-usa@touchstone.com',
            'image' => 'Storage/Image/narrative_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);
    }
}
