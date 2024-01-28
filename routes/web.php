<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer les routes web pour votre application.
| Ces routes sont chargées par le RouteServiceProvider au sein d'un groupe
| qui contient le groupe de middleware "web".
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Routes pour les films
    Route::resource('movies', MovieController::class);

    // Routes pour les livres
    Route::resource('books', BookController::class);

    // Routes pour les albums
    Route::resource('albums', AlbumController::class);

    // Routes pour les séries
    Route::resource('series', SerieController::class);

    // Routes pour les critiques
    Route::resource('reviews', ReviewController::class);

});
