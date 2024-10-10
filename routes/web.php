<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\AuthController ;

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

Route::get('/B-Livre/inscription',[AuthController::class, 'inscription'])->name('Auth.inscription');
Route::post('/B-Livre/inscription',[AuthController::class, 'ins_traitement']);

Route::delete('/B-Livre/deconnexion',[AuthController::class, 'deconnexion'])->name('Auth.deconnexion');

Route::get('/B-Livre/connexion',[AuthController::class, 'connexion'])->name('Auth.connexion');
Route::post('/B-Livre/connexion',[AuthController::class, 'con_traitement']);

Route::prefix('/B-Livre')->name('livre.')->controller(LivreController::class)->group(function(){


     Route::get('/', function() {
            return view('biblio.index');
      })->name('acceuil') ;
     Route::get('/bibliotheque/{userId}', 'store')->name('store');
     Route::get('/bibliotheque/blivre-magie', 'magie')->name('magie');
     Route::get('/lecture/{slug}', 'lecture')->name('lecture');

     Route::get('/AjouterLivre', 'ajout')->name('ajout') ;
     Route::post('/AjouterLivre', 'ajout_traitement') ;

     Route::get('/ModifierLivre/{livre}', 'modifier')->name('modif') ;
     Route::post('/ModifierLivre/{livre}', 'modifier_traitement') ;

     Route::post('/SupprimerLivre/{livre}', 'supprimer') ;

     Route::get('/publication', 'publication')->name('publication') ;


});


