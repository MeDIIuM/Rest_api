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
        $city = ['Краснодар', 'Волгоград', 'Москва', 'Севастополь', 'Горзный'];
        $street = ['Ленина', 'Мира', 'Пархоменко', 'Советская', 'Чуйкова'];
        for ($i = 0; $i < 30; $i++) {
            DB::table('address')->insert([
                'client_id' => random_int(0, 30),
                'region' => $region[array_rand($region, 1)],
                'city' => $city[array_rand($city, 1)],
                'street' => $street[array_rand($street, 1)],
                'house' => random_int(0, 100),
                'postcode' => random_int(100000 , 999999),
            ]);
        }
    }
}
