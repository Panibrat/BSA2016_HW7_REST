<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array(
                'name' => "Sasha",
                'lastname' => "Panibratenko",
                'email' => 'a.panibratenko@gmail.com',
                'role' => 'admin',
                'password' => '111111'
            ),
            array(
                'name' => "Gena",
                'lastname' => "Kruglenko",
                'email' => 'kruglyi@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Petr",
                'lastname' => "Popov",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Marina",
                'lastname' => "Ivanova",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Sasha",
                'lastname' => "Antonov",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Sergey",
                'lastname' => "Drozdov",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Igor",
                'lastname' => "Sidorov",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Sergey ",
                'lastname' => "Birukov",
                'email' => str_random(10).'@gmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Misha",
                'lastname' => "Morozov",
                'email' => 'morozko@real.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Artur",
                'lastname' => "Pirozhkov",
                'email' => 'academy@test.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Viktor",
                'lastname' => "Shkroba",
                'email' => 'v.shkr@jci.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Sergey",
                'lastname' => "Beznogov",
                'email' => 'dveruki@hotmail.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Ruslan",
                'lastname' => "Sayko",
                'email' => 'r.sayko@jci.com',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Pavel",
                'lastname' => "Kazlovsky",
                'email' => 'kpa@yandex.ru',
                'role' => 'user',
                'password' => '111111'
            ),
            array(
                'name' => "Andrey",
                'lastname' => "Shmondenko",
                'email' => 'smon@hotmail.com',
                'role' => 'user',
                'password' => '111111'
            ),


        );
        DB::table('users')->insert($users);
    }
}
