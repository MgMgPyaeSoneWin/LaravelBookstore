<?php

use Illuminate\Database\Seeder;

class PublisherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('publisher')->insert([
            'name' => 'Simon & Schuster'
        ]);

        DB::table('publisher')->insert([
            'name' => 'HarperCollins'
        ]);

        DB::table('publisher')->insert([
            'name' => 'Penguin Random House'
        ]);

        DB::table('publisher')->insert([
            'name' => 'Hachette Livre'
        ]);

    }
}
