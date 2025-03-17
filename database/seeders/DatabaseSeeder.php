<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            GenreSeeder::class,
        ]);

        // Book::factory(100)->create();
        $authors = Author::factory(100)->create();
        Member::factory(100)->create();

        Book::factory(100)->create()->each(function ($book) use ($authors) {
            $book->authors()->attach(
                $authors->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        Loan::factory(100)->create();
    }
}
