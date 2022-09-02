<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fiction
        Book::create([
            'category_id' => 1,
            'title' => 'Peter and Wendy'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'This Time Tomorrow'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Utopia'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Dream Town'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Run, Rose, Run'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'The Summer Place'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'The Last Thing He Told Me'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'The Island'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'The Homewreckers'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Razzmatazz'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'The Mirror & the Light'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Shuggie Bain'
        ]);

        // Science
        Book::create([
            'category_id' => 2,
            'title' => 'The Feynman Lectures on Physics'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Cosmos'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'A Vision of the Human Future in Space'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'An Eternal Golden Braid'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Richard Feynman\'s Greatest Achievements In Physics'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'A Short History of Nearly Everything'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Nature Selection'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'A Brief History of Time'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'The Universe in a Nutshell'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'The Selfish Gene'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Thinking, Fast and Slow'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'The Blind Watchmaker'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => ' The Elegant Universe'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'The Immortal Life'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'The Origin of Species'
        ]);

        // Computer
        Book::create([
            'category_id' => 3,
            'title' => 'The Birth of Computer Science'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'The Life Story of a Technology'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Xerox PARC and the Dawn of the Computer Age'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'The Secret History of Cyber War'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => ' Introduction to Computer Science Using Python'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'JavaScript: The Good Parts'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Building a Modern Computer from First Principles'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'The Pragmatic Programmer'
        ]);
    }
}
