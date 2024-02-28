<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CliEstablishmentSeed;
use DB;

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
        function buscarTudoRelacionado($palavra) {

            $resultados = CliEstablishmentSeed::where('cli_establishment_seed_categories', 'like', "%$palavra%")
            ->orwhere('cli_establishment_seed_city', 'like', "%$palavra%")
            ->orwhere('cli_establishment_seed_name', 'like', "%$palavra%")
            ->orwhere('cli_establishment_seed_address_formatted', 'like', "%$palavra%")
            ->get();

            return $resultados;
            
        }

        function buscarComRelacao($palavras) {
            $palavra1 = $palavras[0];
            $palavra2 = $palavras[1];
            $resultados = DB::select("SELECT * FROM cli_establishment_seeds WHERE cli_establishment_seed_categories LIKE '%$palavra1%' AND cli_establishment_seed_city LIKE '%$palavra2%'");
            //var_dump($resultados);
            return $resultados;
        }

        function alterarNomenclatura($palavra) {
            switch($palavra) {
                case 'padaria':
                    $palavra = 'bakery';
                    break;
                case 'padarias':
                    $palavra = 'bakery';
                    break;
                case 'restaurante':
                    $palavra = 'restaurant';
                    break;
                case 'restaurantes':
                    $palavra = 'restaurant';
                    break;
                case 'comida':
                    $palavra = 'food';
                    break;
                case 'café':
                    $palavra = 'cafe';
                    break;
                case 'cafés':
                    $palavra = 'cafe';
                    break;
                case 'mercado':
                    $palavra = 'store';
                    break;
                case 'mercados':
                    $palavra = 'store';
                    break;
                case 'bares':
                    $palavra = 'bar';
                    break;
            }

            return $palavra;
        }

        $palavras_irrelevantes = ['em', 'na', 'no', 'dos', 'das', 'do', 'a', 'o'];
        $palavras = explode(' ', $request->search);
        $palavras_filtradas = array_diff($palavras, $palavras_irrelevantes);
        $palavras_filtradas = array_values($palavras_filtradas);
        $palavras_alteradas = [];

        if (count($palavras_filtradas) === 1) {
            $palavra_alterada = alterarNomenclatura($palavras_filtradas[0]);
            $resultados = buscarTudoRelacionado($palavra_alterada);
        } else {
            foreach($palavras_filtradas as $palavra) {
                $palavra_alterada = alterarNomenclatura($palavra);
                array_push($palavras_alteradas, $palavra_alterada);
            }

            $resultados = buscarComRelacao($palavras_alteradas);
        }

        return view('search', ['resultados' => $resultados]);
    }
}
