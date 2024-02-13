<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'client_id',
        'event_title',
        'event_description',
        'event_local',
        'event_date',
        'event_hour',
        'event_classification',
        'event_social_media_link',
        'event_date_sale_ticket',
    ];

    protected $guarded = [];

}