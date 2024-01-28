<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'book_id', 'album_id', 'serie_id', 'rating', 'comment'];

    // Vous pouvez ajouter des relations ici, par exemple :
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    // Ajoutez des méthodes similaires pour les autres types de média si nécessaire
}
