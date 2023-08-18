<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function flavours(): HasMany
    {
        return $this->hasMany(Flavour::class);
    }
    public function meals(): HasMany
    {
        return $this->hasMany(Meals::class);
    }
    public function sides(): HasMany
    {
        return $this->hasMany(Sides::class);
    }
    public function beverages(): HasMany
    {
        return $this->hasMany(Beverage::class);
    }
    
    use HasFactory;

    protected $fillable=['name','restaurant_id'];
}
