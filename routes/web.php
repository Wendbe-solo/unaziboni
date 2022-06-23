<?php

use App\Http\Controllers\EtudiantController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('page', function () {
    return view('page');
});
Route::get('editEtudiant', function () {
    return view('editEtudiant');
});
Route::get('etd', function () {
    return view('etudiant');
});

Route::get('/', function () {
    return view('auth.register');
});
Route::get('aut1', function () {
    return view('aut1');
});
Route::get('ins1', function () {
    return view('ins1');
});
Route::get('master', function () {
    return view('./layouts/master');
});
Route::get('carnet', function () {
    return view('carnet');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/etudiant",[EtudiantController::class,"index"])->name("etudiant");

Route::get("/etudiant/create",[EtudiantController::class,"create"])->name("etudiant.create");

Route::get("/etudiant/{etudiant}",[EtudiantController::class,"edit"])->name("etudiant.edit");

Route::post("/etudiant/create",[EtudiantController::class,"store"])->name("etudiant.ajouter");

Route::delete("/etudiant/{etudiant}",[EtudiantController::class,"delete"])->name("etudiant.supprimer");

Route::put("/etudiant/{etudiant}",[EtudiantController::class,"update"])->name("etudiant.update");