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

Route::get('/B-Livre/inscription',[AuthController::class, 'inscription'])->name('Auth.inscription')->middleware('guest');
Route::post('/B-Livre/inscription',[AuthController::class, 'ins_traitement'])->middleware('guest');

Route::delete('/B-Livre/deconnexion',[AuthController::class, 'deconnexion'])->name('Auth.deconnexion')->middleware('auth');

Route::get('/B-Livre/connexion',[AuthController::class, 'connexion'])->name('Auth.connexion')->middleware('guest');
Route::post('/B-Livre/connexion',[AuthController::class, 'con_traitement'])->middleware('guest');

Route::prefix('/B-Livre')->name('livre.')->controller(LivreController::class)->group(function(){


     Route::get('/', function() {
            return view('biblio.index');
      })->name('acceuil') ;
     Route::get('/bibliotheque/{userId}', 'store')->name('store')->middleware('auth');
     Route::get('/bibliotheque/blivre-magie', 'magie')->name('magie')->middleware('auth');
     Route::get('/lecture/{slug}', 'lecture')->name('lecture')->middleware('auth') ;

     Route::get('/AjouterLivre/{userId}', 'ajout')->name('ajout')->middleware('auth') ;
     Route::post('/AjouterLivre/{userId}', 'ajout_traitement')->middleware('auth') ;

     Route::get('/ModifierLivre/{livre}/{userId}', 'modifier')->name('modif')->middleware('auth') ;
     Route::post('/ModifierLivre/{livre}/{userId}', 'modifier_traitement')->middleware('auth') ;

     Route::get('/SupprimerLivre/{livre}/{userId}', 'supprimer')->name('delete')->middleware('auth') ;

     Route::get('/publication/{userId}', 'publication')->name('publication')->middleware('auth') ;


});


