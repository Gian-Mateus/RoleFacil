<?php

namespace App\Http\Controllers;

use App\Models\CliEstablishmentSeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class ListController extends Controller
{
    public function show(CliEstablishmentSeed $cli, $list){
        $category = Lang::get("categoryplu.".$list);

        $cli = CliEstablishmentSeed::where([
            ["cli_establishment_seed_categories", "like", "%{$category}%"]
        ])->get();
        foreach($cli as $c){
            $c["cli_establishment_seed_imgs"] = explode(";", $c["cli_establishment_seed_imgs"]);
        };

        return  view("list", ["cli" => $cli]);
        
    }

    public function all(CliEstablishmentSeed $cli){
        $cli = CliEstablishmentSeed::all();

        foreach($cli as $c){
            $c["cli_establishment_seed_imgs"] = explode(";", $c["cli_establishment_seed_imgs"]);
        };
        return view('list', ['cli' => $cli]);
    }
}