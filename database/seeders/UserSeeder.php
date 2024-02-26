<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('details_places/db_detail_places.json');
        $clients = json_decode($json, true);

        foreach($clients["results"] as $cli){
            User::uptdateOrCreate([
                'email' => 'test@test.com',
                'password' => bcrypt('123456789'),
                'user_name' => $cli["name"],
                'user_cnpj' => '12341234000154',
                'user_zipcode' => str_replace("-", '', $cli["address_components"]["postal_code"]),
                'user_address' => ($cli["address_components"]["route"])?: "Rua sem nome",
                'user_number_address' => ($cli["address_components"]["street_number"])?: "s/n",
                'user_city' => ($cli["address_components"]["administrative_area_level_2"])?: "City",
                'user_neighborhood' => 'Padre Martinho Stein',
                'user_uf' => ($cli["address_components"]["administrative_area_level_1"])?: "State",
                'user_latitude' => ($cli["geometry"]["location"]["lat"])?: "0.0",
                'user_longitude' => ($cli["geometry"]["location"]["lng"])?: "0.0",
                'user_celular' => '992899948',
                'user_ddd_celular' => '47',
                'user_telefone_fixo' => '92899948',
                'user_ddd_telefone_fixo' => '47'
            ]);
        }
    }
}
