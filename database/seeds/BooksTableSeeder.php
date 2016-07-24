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
        DB::table('books')->delete();
        $users = array(
            array(
                'title' => "Wild Wolf",
                'author' => "London",
                'year' => 1878,
                'genre' => 'adventure',
                'user_id' => random_int(1, 10)


            ),
            array(
                'title' => "War and Peace",
                'author' => "Tolstoy",
                'year' => 1878,
                'genre' => 'Erotic',
                'user_id' => null

            ),
            array(
                'title' => "Viy",
                'author' => "Gogol",
                'year' => 1928,
                'genre' => 'Fantastic',
                'user_id' => null

            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "Volvo",
                'author' => "Petterson",
                'year' => 2001,
                'genre' => 'Technic',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "CRUD",
                'author' => "Academy",
                'year' => 2016,
                'genre' => 'Adventure',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "Mumu",
                'author' => "Turgeniev",
                'year' => 1999,
                'genre' => 'Adventure',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "Black Jack",
                'author' => "Kristy",
                'year' => 1961,
                'genre' => 'Adventure',
                'user_id' => null

            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'user_id' => random_int(1, 10)

            ),
            array(
                'title' => "Go away",
                'author' => "Jackson",
                'year' => 2008,
                'genre' => 'Documental',
                'user_id' => random_int(1, 10)

            )


        );
        DB::table('books')->insert($users);

    }
}
