<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\db;
use App\Models\Books;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'publishers_id' => 1,
            'title' => 'Harry Potter and The Goblet of Fire',
            'author' => 'J.K Rowling',
            'year' => '2002',
            'synopsis' => 'The Triwizard Tournament is to be held at Hogwarts.
                            Only wizards who are over seventeen are allowed to enter -
                            but that doesnt stop Harry dreaming that he will win the competition.
                            Then at Halloween, when the Goblet of Fire makes its selection,
                            Harry is amazed to find his name is one of those that the magical cup picks out.
                            He will face death-defying tasks, dragons and Dark wizards, but with the help of his best friends, Ron and Hermione,
                             he might just make it through - alive!',
            'image' => 'Storage/Image/book_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publishers_id' => 2,
            'title' => 'Dilan 1990',
            'author' => 'Pidi Baiq',
            'year' => '2015',
            'synopsis' => '"Milea kamu cantik, tapi aku belum mencintaimu. Enggak tahu kalau sore. Tunggu aja." (Dilan 1990)
            "Milea jangan pernah bilang ke aku ada yang menyakitimu., nanti besoknya, orang itu akan hilang." (Dilan 1990)',
            'image' => 'Storage/Image/dilan_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publishers_id' => 3,
            'title' => 'Tateism : The 41 Tenets : The Philosophy of Andrew Tate',
            'author' => 'Andrew Tate and Chris G',
            'year' => '2020',
            'synopsis' => 'Tateism is an historic philosophy based on the ideas of Andrew Tate, an approach to life that seeks to live in balance and harmony with oneself, human society, and the natural world.
            An anthology of wise sayings, it offers a practical model by which the individual can live an extraordaniry life by working on the self rather than explaining the human place in the universe.
            The moral code it encourages is based on the idea of continuous progress and the rewards reaped for such a life are an abundance in all realm of human experience.
            One of the greatest of all works of philosophy: a series of wise and practical aphorisms that have been consulted and admired by statesmen, thinkers and ordinary readers.',
            'image' => 'Storage/Image/tate_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

        DB::table('books')->insert([
            'publishers_id' => 4,
            'title' => 'The Book of Jesus: A Treasury of the Greatest Stories and Writings About Christ',
            'author' => 'Calvin Miler',
            'year' => '1988',
            'synopsis' => 'Drawn from every era of history, this collection of stories, poems, essays, traditional hymns, and celebratory songs is an essential volume for all Christian libraries.',
            'image' => 'Storage/Image/Jesus_cover.jpg'
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);

    }
}
