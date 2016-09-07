<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Dit is een titel 1',
            'description' => 'Dit is de omschrijving'
        ]);
        Article::create([
            'title' => 'Dit is een titel 2',
            'description' => 'Dit is de omschrijving'
        ]);
        Article::create([
            'title' => 'Dit is een titel 3',
            'description' => 'Dit is de omschrijving'
        ]);
    }
}
