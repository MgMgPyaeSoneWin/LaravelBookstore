<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(authorTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(PublisherTableSeeder::class);
    }
}
