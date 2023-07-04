<?php

use App\Http\Controllers\administrateurController;
use App\Http\Controllers\DomaineCompetenceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\IdentiteController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
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
    return view('login');
})->name("/");

Route::get('/accueil', function () {

    $udc = DB::table("identites")
        ->where("etablissement_id", 1)
        ->count();

    $cndrs = DB::table("identites")
        ->where("etablissement_id", 2)
        ->count();

    $inrap = DB::table("identites")
        ->where("etablissement_id", 3)
        ->count();

    $non = DB::table("identites")
        ->where("etablissement_id", 0)
        ->count();
    return view('index', compact("udc", "cndrs", "inrap", "non"));
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(pageController::class)->group(function () {

    // Route::get("add-user", 'add_user')->name("add-user");
    Route::get("show-user", 'show_user')->name("show-user");

    Route::get("show-etablissement", 'show_etablissement')->name("show-etablissement");
    Route::get("add-coordonnees", 'add_coordonnees')->name("add-coordonnees");
    Route::get("show-coordonnees", 'show_coordonnees')->name("show-coordonnees");
    Route::get("add-formation", 'add_formation')->name("add-formation");
    Route::get("add-domaine-competence", 'add_domaine_competence')->name("add-domaine-competence");
    Route::get("axe-de-recherche", 'axe_recherche')->name("axe-de-recherche");
    Route::get("action-au-pres-organisme", 'action_au_pres_organisme')->name("action-au-pres-organisme");
    Route::get("add-production", 'add_production')->name("add-production");
    Route::get("add-post-doc", 'post_doc')->name("add-post-doc");
    Route::get("add-projet", 'add_projet')->name("add-projet");

    Route::get("fiche", 'fiche')->name("fiche");

    Route::get("fiches/{id}", 'fiches')->name("fiches");



    Route::get("recherche-liste", 'recherche_liste')->name("recherche-liste");

    Route::post("recherche-liste", 'store_recherche_liste')->name("store-recherche-liste");

    Route::get("liste", 'liste')->name("liste");

    Route::get("statistique-etablissement", 'statistique_etablissement')->name("statistique-etablissement");
    Route::get("statistique-profession", 'statistique_profession')->name("statistique-profession");
});







require __DIR__ . '/auth.php';
