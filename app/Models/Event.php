<?php

namespace App\Models;

use Pariwo\Resources\Models\ResourceModel;

class Event extends ResourceModel
{
    protected $fillable = [
        'event_name',
        'event_description',
        'start_date',
        'start_time',
        'end_time',
        'end_date',
        'creator_id',
    ];
}
