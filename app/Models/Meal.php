<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Meal extends Model
{
    public function meal(): HasOne
    {
        return $this->hasOne(Flavour::class);
    }
    
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
   
    protected $fillable=['name','image','description','price','menu_id','flavour_id'];
    use HasFactory;
}
