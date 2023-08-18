<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flavour extends Model
{
    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class);
    }
    protected $fillable=['name','meal_id'];
    use HasFactory;
}
