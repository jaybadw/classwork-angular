<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sides extends Model
{
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class);
    }
    use HasFactory;
}
