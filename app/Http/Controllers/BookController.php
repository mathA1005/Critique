<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    // Afficher la liste des livres
    public function index()
    {
        $books = Book::all();
        return Inertia::render('books/Index', ['books' => $books]);
    }

    // Afficher le formulaire de création d'un livre
    public function create()
    {
        return Inertia::render('books/Create');
    }

    // Stocker un nouveau livre
    public function store(Request $request)
    {
        // Valider la requête
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        // Créer et enregistrer le livre
        Book::create($request->all());

        return redirect()->route('books.index');
    }

    // Afficher un livre spécifique
    public function show(Book $book)
    {
        return Inertia::render('books/Show', ['book' => $book]);
    }

    // Afficher le formulaire d'édition d'un livre
    public function edit(Book $book)
    {
        return Inertia::render('books/Edit', ['book' => $book]);
    }

    // Mettre à jour un livre spécifique
    public function update(Request $request, Book $book)
    {
        // Valider la requête
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|digits:4',
            'genre' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);

        // Mettre à jour le livre
        $book->update($request->all());

        return redirect()->route('books.index');
    }

    // Supprimer un livre
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}

