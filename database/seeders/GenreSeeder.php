<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'genre_name' => 'Terror'
            ],
            [
                'genre_name' => 'Fantasia'
            ],
            [
                'genre_name' => 'Comedia'
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
