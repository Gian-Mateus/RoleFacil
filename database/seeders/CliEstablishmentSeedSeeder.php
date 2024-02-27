<?php

namespace Database\Seeders;

use App\Models\CliEstablishmentSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CliEstablishmentSeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = file_get_contents('details_places/db_addressAlter.json');
        $clients = json_decode($json, true);
        $pathImg = [];
        foreach($clients["results"] as $client){
            if(isset($client["photos"])){
                if($client["photos"] > 0 ){
                    $endereco = "";
                    $nameFile = preg_replace('/[^a-zA-Z0-9]/', '_', $client["name"]);
                    for($i = 0; $i < count($client[ "photos" ]); $i++){
                        $endereco .= "assets/imgs/{$nameFile}/{$nameFile}_{$i}.jpg;";
                    }
                    array_push($pathImg, [
                        "name" => $client["name"],
                        "path" => $endereco
                    ]);
                };
            };
        };
        function searchValue($array, $valorProcurado) {
            foreach ($array as $subArray) {
                if (isset($subArray["name"]) && $subArray["name"] == $valorProcurado) {
                    return $subArray["path"];
                }
            }
            
            // Retorna vazio se o valor procurado não for encontrado
            return '';
        }

        // $json = Storage::disk('local')->get('details_places/db_addressAlter.json');
        // $json = file_get_contents('details_places/db_addressAlter.json');
        // $clients = json_decode($json, true);

        foreach ($clients["results"] as $cli) {
            CliEstablishmentSeed::updateOrCreate([
                'cli_establishment_seed_name' => isset($cli["name"]) ? $cli["name"] : "",
                'cli_establishment_seed_address' => isset($cli["address_components"]["route"]) ? $cli["address_components"]["route"] : "",
                'cli_establishment_seed_address_formatted' => isset($cli["formatted_address"]) ? $cli["formatted_address"] : "",
                'cli_establishment_seed_phone' => isset($cli["international_phone_number"]) ? str_replace([' ', '-', '+'], '', $cli["international_phone_number"]) : "",
                'cli_establishment_seed_phone_formatted' => isset($cli["formatted_phone_number"]) ? $cli["formatted_phone_number"] : "",
                'cli_establishment_seed_number_address' => isset($cli["address_components"]["street_number"]) ? $cli["address_components"]["street_number"] : "",
                'cli_establishment_seed_city' => isset($cli["address_components"]["administrative_area_level_2"]) ? $cli["address_components"]["administrative_area_level_2"] : "",
                'cli_establishment_seed_neighborhood' => isset($cli["address_components"]["sublocality_level_1"]) ? $cli["address_components"]["sublocality_level_1"] : "",
                'cli_establishment_seed_uf' => isset($cli["address_components"]["administrative_area_level_1"]) ? $cli["address_components"]["administrative_area_level_1"] : "",
                'cli_establishment_seed_lat' => isset($cli["geometry"]["location"]["lat"]) ? $cli["geometry"]["location"]["lat"] : "",
                'cli_establishment_seed_lng' => isset($cli["geometry"]["location"]["lng"]) ? $cli["geometry"]["location"]["lng"] : "",
                'cli_establishment_seed_categories' => isset($cli["types"]) ? implode(';', $cli["types"]) : "",
                'cli_establishment_seed_operation' => isset($cli["current_opening_hours"]["weekday_text"]) ? implode(";", $cli["current_opening_hours"]["weekday_text"]) : "",
                'cli_establishment_seed_link_website' => isset($cli["website"]) ? $cli["website"] : "",
                'cli_establishment_seed_imgs' => searchValue($pathImg, $cli["name"]),
            ]);
        }
    }
}
