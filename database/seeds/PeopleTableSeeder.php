<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'TARO',
            'mail' => 'taro@yamada.jp',
            'age' => 35,
         ]);
         DB::table('people')->insert([
            'name' => 'HANAKO',
            'mail' => 'hanako@flower.com',
            'age' => 24,
         ]);
         DB::table('people')->insert([
            'name' => 'SACHIKO',
            'mail' => 'sachi@happy.org',
            'age' => 47,
         ]);
         DB::table('people')->insert([
            'name' => 'chie',
            'mail' => 'lovered717@gmail.com',
            'age' => 28,
         ]);
//
    }
}
