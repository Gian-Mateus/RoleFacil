<?php

namespace App\Http\Controllers;

use App\Models\CliEstablishmentSeed;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $users = CliEstablishmentSeed::all();
        $random10 = CliEstablishmentSeed::inRandomOrder()->take(10)->pluck('cli_establishment_seed_id');
        $establishment = CliEstablishmentSeed::whereIn('cli_establishment_seed_id', $random10)->get();
        $imgEstab = [];
        foreach($establishment as $estab){
            $estab["cli_establishment_seed_imgs"] = explode(";", $estab["cli_establishment_seed_imgs"]);
        }
        $bakery = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%bakery%"]
        ])->take(10)->get();
        $restaurants = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%restaurant%"]
        ])->take(10)->get();
        $bar = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%bar%"]
        ])->take(10)->get();

        return view('home', [
            'users' => $users,
            'establishment' => $establishment,
            'imgEstab' => $imgEstab,
            'bakery' => $bakery,
            'restaurants' => $restaurants,
            'bar' => $bar,
        ]);
    }
}
