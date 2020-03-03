<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(){

        $region = ['Краснодарский край', 'Волгоградская область', 'Московская область', 'Крым', 'Чечня'];
        $nas_punkt = ['Краснодар', 'Волгоград', 'Москва', 'Севастополь', 'Горзный'];
        $street = ['Ленина', 'Мира', 'Пархоменко', 'Советская', 'Чуйкова'];
        for ($i = 0; $i < 30; $i++) {
            DB::table('Address')->insert([
                'rest_id' => random_int(0, 30),
                'region' => $region[array_rand($region, 1)],
                'nas_punkt' => $nas_punkt[array_rand($nas_punkt, 1)],
                'street' => $street[array_rand($street, 1)],
                'house' => random_int(0, 100),
                'index' => random_int(100000 , 999999),
            ]);
        }
    }
}
