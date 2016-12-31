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
        $faker = Faker\Factory::create();
        DB::table('books')->insert([
            'code_no' => 'A001',
            'name' => 'Spam Nation: The Inside Story of Organized Cybercrime-from Global Epidemic to Your Front Door',
            'author_id' => 1,
            'publisher_id' => 1,
            'genre_id' => 1,
            'price' => "$11.87",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A002',
            'name' => 'The Everything Store: Jeff Bezos and the Age of Amazon',
            'author_id' => 2,
            'publisher_id' => 1,
            'genre_id' => 2,
            'price' => "$19.14",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A003',
            'name' => 'The Upstarts: How Uber, Airbnb, and the Killer Companies of the New Silicon Valley Are Changing the World',
            'author_id' => 2,
            'publisher_id' => 2,
            'genre_id' => 2,
            'price' => "$30.00",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A004',
            'name' => 'Data-ism: The Revolution Transforming Decision Making, Consumer Behavior, and Almost Everything Else',
            'author_id' => 3,
            'publisher_id' => 2,
            'genre_id' => 3,
            'price' => "$23.92",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A005',
            'name' => 'Dit is big data (Dutch Edition)',
            'author_id' => 3,
            'publisher_id' => 3,
            'genre_id' => 3,
            'price' => "$15.66",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A006',
            'name' => 'SEO 2017: Learn search engine optimization with smart internet marketing strategies',
            'author_id' => 4,
            'publisher_id' => 3,
            'genre_id' => 4,
            'price' => "$49.99",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A007',
            'name' => 'Work Rules!: Insights from Inside Google That Will Transform How You Live and Lead',
            'author_id' => 5,
            'publisher_id' => 3,
            'genre_id' => 2,
            'price' => "$6.76",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A008',
            'name' => 'Code: The Hidden Language of Computer Hardware and Software',
            'author_id' => 6,
            'publisher_id' => 4,
            'genre_id' => 5,
            'price' => "$86.55",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A009',
            'name' => 'CApplications = Code + Markup: A Guide to the Microsoft® Windows® Presentation Foundation: A Guide to the Microsoft Windows Presentation Foundation (Developer Reference)',
            'author_id' => 6,
            'publisher_id' => 4,
            'genre_id' => 5,
            'price' => "$59.99",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);

        DB::table('books')->insert([
            'code_no' => 'A010',
            'name' => 'The Annotated Turing: A Guided Tour Through Alan Turing\'s Historic Paper on Computability and the Turing Machine',
            'author_id' => 6,
            'publisher_id' => 4,
            'genre_id' => 5,
            'price' => "$22.48",
            'publishing_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'edition' => $faker->randomNumber(1),
            'deleted' => 0
        ]);
    }
}
