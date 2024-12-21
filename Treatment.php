<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    public function patient(): belongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
