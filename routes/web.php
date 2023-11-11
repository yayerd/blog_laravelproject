<?php

// AJOUTER LE CATEGORIE CONTROLLER COMME NAMESPACE

use App\Http\Controllers\Article_controller;
use App\Http\Controllers\Categorie_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// VOICI UNE MANIERE D'ECRIRE LES ROUTES: REDIRECTION VERS LES VUES 
// Route::get('/listecategorie', function () {
//     return view('categories.liste_categorie');
// });

// VOICI UNE AUTRE MANIERE D'ECRIRE LES ROUTES: LES CONTROLLERS SONT CONSIDERES 
// Les routes de Categorie
Route::get('/listecategorie', [Categorie_controller::class, 'index']);
Route::get('/ajoutercategorie', [Categorie_controller::class, 'create']);
Route::post('/categorie/putcategorie', [Categorie_controller::class, 'store']);


// Nommer une route : Route::get('/listecategorie', [Categorie_controller::class, 'index'])->name('nomdelaroute')
// utilisation de la route nommée: {{'nomdelaroute'}}

// Les routes de Article
Route::get('/listearticle', [Article_controller::class, 'index']);
Route::get('/ajouterarticle', [Article_controller::class, 'create']);
Route::post('/categorie/putarticle', [Article_controller::class, 'store']);
// On veut voir les details de chaque article
Route::get('/articles/{id}', [Article_controller::class, 'show']);
Route::get('/modifierarticle/{id}', [Article_controller::class, 'edit']);
Route::patch('/article/modifierarticle/{id}', [Article_controller::class, 'update']);
Route::delete('/article/supprimerarticle/{id}', [Article_controller::class, 'destroy']);



// Route::post('/categorie/modifierarticle', [Article_controller::class, 'update'])
