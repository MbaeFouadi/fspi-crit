<?php

use App\Http\Controllers\pageController;
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
    return view('index');
})->name('/');

Route::controller(pageController::class)->group(function () {

    Route::get("add-user", 'add_user')->name("add-user");
    Route::get("show-user", 'show_user')->name("show-user");
    Route::get("add-etablissement", 'add_etablissement')->name("add-etablissement");
    Route::get("add-grade", 'add_grade')->name("add-grade");
    Route::get("add-profession", 'add_profession')->name("add-profession");

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

    Route::get("login", 'login')->name("login");


    Route::get("recherche-liste", 'recherche_liste')->name("recherche-liste");

    Route::get("statistique-etablissement", 'statistique_etablissement')->name("statistique-etablissement");
    Route::get("statistique-profession", 'statistique_profession')->name("statistique-profession");
});
