<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'user_id',
        'client_name',
        'client_cnpj',
        'client_description',
        'client_zipcode',
        'client_complement',
        'client_adress',
        'client_number_address',
        'client_city',
        'client_neighborhood',
        'client_uf',
    ];
}