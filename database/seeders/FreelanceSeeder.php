<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Freelancer;

class FreelanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Freelancer::create([
            'user_id' => '1',
            'freelancer_title' => 'Título do freelancer',
            'freelancer_description' => 'Descrição do freelance lorem ipsum sei lá o que',
            'freelancer_start' => '18',
            'freelancer_end' => '22',
            'freelancer_money' => '30',
            'freelancer_active' => '1',
            'freelancer_email' => 'testando@teste.com.br',
            'freelancer_phone' => '47992899948',
            'freelancer_telefone_fixo' => '4791243948'
        ]);
    }
}
