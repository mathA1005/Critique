<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'creator', 'release_year', 'genre', 'rating'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
