<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewController extends Controller
{
    // Afficher la liste des critiques
    public function index()
    {
        $reviews = Review::with('user')->get(); // Assurez-vous d'avoir une relation 'user' dans le modèle Review
        return Inertia::render('reviews/Index', ['reviews' => $reviews]);
    }

    // Afficher le formulaire de création d'une critique
    public function create()
    {
        return Inertia::render('reviews/Create');
    }

    // Stocker une nouvelle critique
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', // Assurez-vous que l'utilisateur existe
            // Ajoutez des validations pour les autres champs comme 'movie_id', 'rating', etc., en fonction de votre modèle
            'comment' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index');
    }

    // Afficher une critique spécifique
    public function show(Review $review)
    {
        return Inertia::render('reviews/Show', ['review' => $review]);
    }

    // Afficher le formulaire d'édition d'une critique
    public function edit(Review $review)
    {
        return Inertia::render('reviews/Edit', ['review' => $review]);
    }

    // Mettre à jour une critique spécifique
    public function update(Request $request, Review $review)
    {
        $request->validate([
            // Effectuez les validations nécessaires
            'comment' => 'required|string',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index');
    }

    // Supprimer une critique
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
