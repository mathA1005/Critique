<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MovieController extends Controller
{
    // Afficher la liste des films
    public function index()
    {
        $movies = Movie::all();
        return Inertia::render('movies/Index', ['movies' => $movies]);
    }

    // Afficher le formulaire de création d'un film
    public function create()
    {
        return Inertia::render('movies/Create');
    }

    // Stocker un nouveau film
    public function store(Request $request)
    {
        // Valider la requête
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|digits:4',
            'director' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        // Créer et enregistrer le film
        Movie::create($request->all());

        return redirect()->route('movies.index');
    }

    // Afficher un film spécifique
    public function show(Movie $movie)
    {
        return Inertia::render('movies/Show', ['movie' => $movie]);
    }

    // Afficher le formulaire d'édition d'un film
    public function edit(Movie $movie)
    {
        return Inertia::render('movies/Edit', ['movie' => $movie]);
    }

    // Mettre à jour un film spécifique
    public function update(Request $request, Movie $movie)
    {
        // Valider la requête
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|digits:4',
            'director' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        // Mettre à jour le film
        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    // Supprimer un film
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
