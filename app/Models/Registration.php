<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Pariwo\Resources\Models\ResourceModel;

class Registration extends ResourceModel
{
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
