<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Вася', 'Петя', 'Дима', 'Коля', 'Егор'];
        $surname = ['Иванов', 'Петров', 'Сидоров', 'Васечкин', 'Русаков'];
        for ($i = 0; $i < 20; $i++) {
            DB::table('clients')->insert([
                'name' => $names[array_rand($names, 1)],
                'surname' => $surname[array_rand($surname, 1)],
            ]);
        }
    }
}
