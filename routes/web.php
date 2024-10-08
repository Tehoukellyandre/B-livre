<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/B-Livre')->name('livre.')->controller(LivreController::class)->group(function(){

     Route::get('/AjouterLivre', 'ajout')->name('ajout') ;
     Route::post('/AjouterLivre', 'ajout_traitement') ;

     Route::get('/ModifierLivre/{livre}', 'modifier')->name('modif') ;
     Route::post('/ModifierLivre/{livre}', 'modifier_traitement') ;

     Route::post('/SupprimerLivre/{livre}', 'supprimer') ;

     Route::get('/publication', 'publication')->name('publication') ;


});



