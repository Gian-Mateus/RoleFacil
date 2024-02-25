<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'teste@teste.com',
            'password' => bcrypt('teste'),
            'user_name' => 'Bernardo Teste',
            'user_cnpj' => '12341234000154',
            'user_zipcode' => '89120000',
            'user_complement' => 'Casa',
            'user_address' => 'Sibipiruna',
            'user_number_address' => '218',
            'user_city' => 'Timbó',
            'user_neighborhood' => 'Padre Martinho Stein',
            'user_uf' => 'SC',
            'user_latitude' => '-26.8249384',
            'user_longitude' => '-49.2890096',
            'user_celular' => '47992899948',
            'user_telefone_fixo' => '4792899948',
        ]);
    }
}
