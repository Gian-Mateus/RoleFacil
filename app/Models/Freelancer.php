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
        'freelancer_hour_start',
        'freelancer_hour_end',
        'freelancer_money',
        'freelancer_active'
    ];
}
