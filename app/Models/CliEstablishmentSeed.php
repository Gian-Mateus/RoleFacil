<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CliEstablishmentSeed extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cli_establishment_seed_name',
        'cli_establishment_seed_description',
        'cli_establishment_seed_zipcode',
        'cli_establishment_seed_address',
        'cli_establishment_seed_address_formatted',
        'cli_establishment_seed_phone',
        'cli_establishment_seed_phone_formatted',
        'cli_establishment_seed_number_address',
        'cli_establishment_seed_city',
        'cli_establishment_seed_neighborhood',
        'cli_establishment_seed_uf',
        'cli_establishment_seed_lat',
        'cli_establishment_seed_lng',
        'cli_establishment_seed_categories',
        'cli_establishment_seed_operation',
        'cli_establishment_seed_gmap',
        'cli_establishment_seed_imgs',
        'cli_establishment_seed_link_instagram',
        'cli_establishment_seed_link_website',
    ];
}
