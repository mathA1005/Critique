<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'artist', 'release_year', 'genre', 'rating'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
