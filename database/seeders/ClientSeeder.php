<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'user_id'=> '1',
            'client_name' => 'Cliente teste',
            'client_cnpj' => '12345678000145',
            'client_description' => 'Qualquer texto aleatório sobre a descrição do cliente',
            'client_zipcode' => '89120000',
            'client_complement' => 'Restaurante prédio',
            'client_adress' => 'Rua Paraguai',
            'client_number_address' => '215',
            'client_city' => 'Timbó',
            'client_neighborhood' => 'Pe. Martinho Stein',
            'client_uf' => 'SC',
        ]);
    }
}
