<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'name' => 'Cyber Security'
        ]);

        DB::table('genre')->insert([
            'name' => 'E-commerce'
        ]);

        DB::table('genre')->insert([
            'name' => 'Big Data'
        ]);

        DB::table('genre')->insert([
            'name' => 'SEO'
        ]);

        DB::table('genre')->insert([
            'name' => 'Code'
        ]);
    }
}
