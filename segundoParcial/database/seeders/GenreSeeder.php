<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genres;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        $genre = new Genres();
        $genre -> genre_name = "Pop";
        $genre -> save();

        $genre = new Genres();
        $genre -> genre_name = "Rock";
        $genre -> save();

        $genre = new Genres();
        $genre -> genre_name = "Opera";
        $genre -> save();

        $genre = new Genres();
        $genre -> genre_name = "Blues";
        $genre -> save();

        $genre = new Genres();
        $genre -> genre_name = "Jazz";
        $genre -> save();
    }
}
