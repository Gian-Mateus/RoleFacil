<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CliEstablishmentSeed;
use App\View\Components\svg\contact;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Schema;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('search');
    }

    public function store(Request $request)
    {
        $tratativa = explode(" ", $request->search);
        $traduzido = [];
        foreach($tratativa as $trat){
            if(Lang::has('categoryplu.'.$trat)){
                array_push($traduzido, Lang::get( 'categoryplu.' .$trat ));
            } else{
                array_push($traduzido, $trat);
            };
        }

        $queryTratada = $traduzido;

        $campos = Schema::getColumnListing('cli_establishment_seeds');
        
        $resultsSearch = CliEstablishmentSeed::where(function ($query) use ($campos, $queryTratada) {
            foreach($campos as $cam){
                for($i = 0; $i < count($queryTratada); $i++){
                    $query->orWhere($cam, "like", '%'.$queryTratada[$i].'%');
                }
            }
        })->get()->toArray();
        
        // dd($resultsSearch);
        return view('search', ["resultados" => $resultsSearch]);
    }
}
