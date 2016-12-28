<?php

use Illuminate\Database\Seeder;

class authorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author')->insert([
            'name' => 'Brian Krebs'
        ]);

        DB::table('author')->insert([
            'name' => 'Brad Stone'
        ]);

        DB::table('author')->insert([
            'name' => 'Steve Lohr'
        ]);

        DB::table('author')->insert([
            'name' => 'Adam Clarke'
        ]);

        DB::table('author')->insert([
            'name' => 'Laszlo Bock'
        ]);


        DB::table('author')->insert([
            'name' => 'Charles Petzold'
        ]);
    }
}
