<?php

namespace App\Http\Controllers;

use App\Models\CliEstablishmentSeed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{
    public function index() {
        $imgsToHome = "assets/images_to_home/559.jpg;assets/images_to_home/14410.jpg;assets/images_to_home/30650.jpg;";

        $categories = "Estabelecimento;Restaurante;Cafeteria;Padaria;Supermercado;Farmácia;Comida;Ponto de Interesse;Loja;Atração Turística";

        $users = CliEstablishmentSeed::all();

        $random10 = CliEstablishmentSeed::inRandomOrder()->take(10)->pluck('cli_establishment_seed_id');
        $establishment = CliEstablishmentSeed::whereIn('cli_establishment_seed_id', $random10)->get();
        foreach($establishment as $estab){
            $estab["cli_establishment_seed_imgs"] = explode(";", $estab["cli_establishment_seed_imgs"]);
        }; 

        $bakery = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%bakery%"]
        ])->take(10)->get();
        foreach($bakery as $bak){
            $bak["cli_establishment_seed_imgs"] = explode(";", $bak["cli_establishment_seed_imgs"]);
        };

        $restaurants = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%restaurant%"]
        ])->take(10)->get();
        foreach($restaurants as $rest){
            $rest["cli_establishment_seed_imgs"] = explode(";", $rest["cli_establishment_seed_imgs"]);
        };

        $bar = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%bar%"]
        ])->take(10)->get();
        foreach($bar as $b){
            $b["cli_establishment_seed_imgs"] = explode(";", $b["cli_establishment_seed_imgs"]);
        };

        return view('home', [
            'users' => $users,
            'establishment' => $establishment,
            'bakery' => $bakery,
            'restaurants' => $restaurants,
            'bar' => $bar,
            'imgsToHome' => $imgsToHome,
            'cat' => $categories
        ]);
    }
}
