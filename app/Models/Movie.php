<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Définissez les attributs qui sont mass assignable
    protected $fillable = ['title', 'description', 'release_year', 'director', 'rating'];

    // Relations, par exemple avec les reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
