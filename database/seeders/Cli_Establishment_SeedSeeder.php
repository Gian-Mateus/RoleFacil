<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Cli_Establishment_Seed;

class Cli_Establishment_SeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('details_places/db_detail_places.json');
        $clients = json_decode($json, true);

        foreach($clients["results"] as $cli){
            Cli_Establishment_Seed::updateOrCreate([
            'cli_establishment_seed_name' => ($cli['name'])?? "",
            'cli_establishment_seed_address' => ($cli["address_components"]["route"])?? "",
            'cli_establishment_seed_address_formatted' => ($cli["formatted_address"])?? "",
            'cli_establishment_seed_phone' => (str_replace([' ', '-', '+'], '', $cli["international_phone_number"])?? ""),
            'cli_establishment_seed_phone_formatted' => ($cli["formatted_phone_number"])?? "",
            'cli_establishment_seed_number_address' => ($cli["address_components"]["street_number"])?? "",
            'cli_establishment_seed_city' => ($cli["address_components"]["administrative_area_level_2"])?? "",
            'cli_establishment_seed_neighborhood' => ($cli["address_components"]["sublocality_level_1"])?? "",
            'cli_establishment_seed_uf' => ($cli["address_components"]["administrative_area_level_1"])?? "",
            'cli_establishment_seed_lat' => ($cli["geometry"]["location"]["lat"])?? "",
            'cli_establishment_seed_lng' => ($cli["geometry"]["location"]["lng"])?? "",
            'cli_establishment_seed_categories' => (implode(';', $cli["types"]))?? "",
            'cli_establishment_seed_operation' => (implode(";", $cli["current_opening_hours"]["weekday_text"]))?? "",
            'cli_establishment_seed_link_website' => ($cli["website"]?? ""),                
            ]);
        }
    }
}
