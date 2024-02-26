<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'freelancer_id',
        'user_id',
        'freelancer_title',
        'freelancer_description',
        'freelancer_start',
        'freelancer_end',
        'freelancer_money',
        'freelancer_active',
        'freelancer_email',
        'freelancer_phone',
        'freelancer_telefone_fixo'
    ];
}
