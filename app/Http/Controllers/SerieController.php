<?php
namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SerieController extends Controller
{
    // Afficher la liste des séries
    public function index()
    {
        $series = Serie::all();
        return Inertia::render('series/Index', ['series' => $series]);
    }

    // Afficher le formulaire de création d'une série
    public function create()
    {
        return Inertia::render('series/Create');
    }

    // Stocker une nouvelle série
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'creator' => 'required|max:255',
            'release_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        Serie::create($request->all());

        return redirect()->route('series.index');
    }

    // Afficher une série spécifique
    public function show(Serie $serie)
    {
        return Inertia::render('series/Show', ['serie' => $serie]);
    }

    // Afficher le formulaire d'édition d'une série
    public function edit(Serie $serie)
    {
        return Inertia::render('series/Edit', ['serie' => $serie]);
    }

    // Mettre à jour une série spécifique
    public function update(Request $request, Serie $serie)
    {
        $request->validate([
            'title' => 'required|max:255',
            'creator' => 'required|max:255',
            'release_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        $serie->update($request->all());

        return redirect()->route('series.index');
    }

    // Supprimer une série
    public function destroy(Serie $serie)
    {
        $serie->delete();
        return redirect()->route('series.index');
    }
}
