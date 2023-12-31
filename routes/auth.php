<?php

use App\Http\Controllers\ActionRechercheController;
use App\Http\Controllers\administrateurController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AxeRechercheController;
use App\Http\Controllers\DomaineCompetenceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\IdentiteController;
use App\Http\Controllers\PostDocController;
use App\Http\Controllers\ProductionScientifiqueController;
use App\Http\Controllers\ProjetTutoreController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
Route::get('inscription', [RegisteredUserController::class, 'create'])
    ->name('add-user');

Route::post('inscription', [RegisteredUserController::class, 'store'])->name('add-user');

// Route::get('login', [AuthenticatedSessionController::class, 'create'])
//             ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store'])->name("login");

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.store');
// });

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('deconnexion', [AuthenticatedSessionController::class, 'destroy'])
        ->name('deconnexion');


    Route::controller(administrateurController::class)->group(function () {
        Route::get("add-etablissement", 'add_etablissement')->name("add-etablissement");
        Route::post("add-etablissement", 'store_add_etablissement')->name("add-etablissement");

        Route::get("add-grade", 'add_grade')->name("add-grade");
        Route::post("add-grade", 'store_add_grade')->name("add-grade");

        Route::get("add-profession", 'add_profession')->name("add-profession");
        Route::post("add-profession", 'store_add_profession')->name("add-profession");
    });

    // Route::controller(administrateurController::class)->group(function () {

    // });

    Route::resource("identite", IdentiteController::class);
    Route::resource("formations", FormationController::class);
    Route::resource("domaines", DomaineCompetenceController::class);
    Route::resource("post-doc", PostDocController::class);
    Route::resource("projet_tutore", ProjetTutoreController::class);
    Route::resource("axe-de-recherche", AxeRechercheController::class);
    Route::resource("action-de-recherche",ActionRechercheController::class);
    Route::resource("production-scientifique",ProductionScientifiqueController::class);

    Route::get('recherche-formation', [FormationController::class, 'recherche_formation'])
    ->name('recherche-formation');

    Route::post('add-formation', [FormationController::class, 'add_formation'])
    ->name('add-formation');

    Route::post('recherche-formation', [FormationController::class, 'store_recherche_formation'])
    ->name('store-recherche-formation');

    Route::get('recherche-domaine', [DomaineCompetenceController::class, 'recherche_domaine'])
    ->name('recherche-domaine');

    Route::post('recherche-domaine', [DomaineCompetenceController::class, 'store_recherche_domaine'])
    ->name('store-recherche-domaine');

    Route::get('recherche-post-doc', [PostDocController::class, 'recherche_post_doc'])
    ->name('recherche-post-doc');

    Route::post('recherche-post-doc', [PostDocController::class, 'store_recherche_post_doc'])
    ->name('store-recherche-post-doc');

    

    Route::get('recherche-axe-recherche', [AxeRechercheController::class, 'recherche_axe_recherche'])
    ->name('recherche-axe-recherche');

    Route::post('recherche-axe-recherche', [AxeRechercheController::class, 'store_recherche_axe_recherche'])
    ->name('store-recherche-axe-recherche');

    Route::get('recherche-projet-tutore', [ProjetTutoreController::class, 'recherche_projet_tutore'])
    ->name('recherche-projet-tutore');

    Route::post('recherche-projet-tutore', [ProjetTutoreController::class, 'store_recherche_projet_tutore'])
    ->name('store-recherche-projet-tutore');

    Route::get('recherche-action', [ActionRechercheController::class, 'recherche_action'])
    ->name('recherche-action');

    Route::post('recherche-action', [ActionRechercheController::class, 'store_recherche_action'])
    ->name('store_recherche-action');

    Route::get('recherche-production', [ProductionScientifiqueController::class, 'recherche_production'])
    ->name('recherche-production');

    Route::post('recherche-production', [ProductionScientifiqueController::class, 'store_recherche_production'])
    ->name('store-recherche-production');

});
