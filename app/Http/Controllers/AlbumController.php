<?php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AlbumController extends Controller
{
    // Afficher la liste des albums
    public function index()
    {
        $albums = Album::all();
        return Inertia::render('albums/Index', ['albums' => $albums]);
    }

    // Afficher le formulaire de création d'un album
    public function create()
    {
        return Inertia::render('albums/Create');
    }

    // Stocker un nouvel album
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'release_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        Album::create($request->all());

        return redirect()->route('albums.index');
    }

    // Afficher un album spécifique
    public function show(Album $album)
    {
        return Inertia::render('albums/Show', ['album' => $album]);
    }

    // Afficher le formulaire d'édition d'un album
    public function edit(Album $album)
    {
        return Inertia::render('albums/Edit', ['album' => $album]);
    }

    // Mettre à jour un album spécifique
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'release_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        $album->update($request->all());

        return redirect()->route('albums.index');
    }

    // Supprimer un album
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }
}
