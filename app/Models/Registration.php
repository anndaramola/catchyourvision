<?php

namespace App\Models;

use Pariwo\Resources\Models\ResourceModel;

class Registration extends ResourceModel
{
    public static function booted(): void
    {
        static::created(function ($model) {

        });
    }
}
