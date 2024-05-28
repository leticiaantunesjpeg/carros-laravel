<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'brand', 'year', 'price_per_day'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

