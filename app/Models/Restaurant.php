<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Restaurant extends Model
{
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
    public function isOpen($openingHours, $closingHours)
{
    // Get the current time in the desired format
    $currentTime = date('H:i');

    // Compare the current time with the opening and closing hours
    if ($currentTime >= $openingHours && $currentTime <= $closingHours) {
        return "Open";
    } else {
        return "Closed";
    }
}

    use HasFactory;
    protected $fillable=['image','restaurant_name','phone','adress','parish','openingHours','closingHours','description','rating'];
}
