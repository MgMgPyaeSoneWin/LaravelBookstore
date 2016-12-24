<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $code_no = str_shuffle($pin);

        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('books')->insert([
                'code_no' => $code_no,
                'name' => $faker->name,
                'author_id' => $faker->randomNumber(1)+1,
                'publisher_id' => $faker->randomNumber(1)+1,
                'genre_id' => $faker->randomNumber(1)+1,
                'price' => $faker->randomNumber(2)."\$",
                'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'edition' => $faker->randomNumber(1),
                'deleted' => 0
            ]);
        }
    }
}
