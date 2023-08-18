<?php

namespace App\Models;

use Faker\Extension\CountryExtension;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=['street_number','street name','line_2','town','parish','country',];

}
