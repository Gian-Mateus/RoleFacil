<?php

namespace App\Http\Controllers;

use App\Models\CliEstablishmentSeed;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class EstablishmentController extends Controller
{
    public function show(CliEstablishmentSeed $establishment, Event $events){

        $categories = explode(";" ,$establishment->cli_establishment_seed_categories);
        foreach($categories as &$category) {
            $category = Lang::get("categories.".$category);
        };
    
        // $establishment->cli_establishment_seed_imgs = explode(";", $establishment->cli_establishment_seed_imgs);

        return view('establishment', [
            "establishment" =>  $establishment, 
            "event" => $events->toArray(),
            "categories" => $categories,
        ]);
    }
}
