<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias_estabelecimentos = array(
            "Restaurante",
            "Cafeteria",
            "Padaria",
            "Supermercado",
            "Farmácia",
            "Comida",
            "Ponto de Interesse",
            "Loja",
            "Atração Turística"
        );

        foreach($categorias_estabelecimentos as $cat){
            Categories::create([
                'category_name' => $cat,
            ]);
        }
        
    }
}
