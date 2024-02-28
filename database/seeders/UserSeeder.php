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

            User::create([
                'email' => 'test@test.com',
                'password' => bcrypt('123456789'),
                'user_cnpj' => '12341234000154',
            ]);
    }
}
