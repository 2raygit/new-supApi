<?php
use App\Http\Controllers\AEventController;

use App\Http\Controllers\AEvaluationController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfildetailController;

use App\Http\Controllers\ANoteController;
use App\Http\Controllers\AReclamationController;
use App\Http\Controllers\AMatiereController;
use App\Http\Controllers\AUserController;

use App\Http\Controllers\ACategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', [ProfilController::class, 'profil'])->middleware(['auth'])->name('profil');
Route::get('/profildetail', [ProfildetailController::class, 'profildetail'])->name('profildetail');


Route::group(['middleware' => ['auth']], function() {
Route::resource('events', AEventController::class)->names('events');
Route::resource('reclamations', AReclamationController::class)->names('reclamations');
Route::resource('matieres', AMatiereController::class)->names('matieres');
Route::resource('users', AUserController::class)->names('users');



Route::resource('notes', ANoteController::class)->names('notes');
Route::resource('categories', ACategoryController::class)->names('categories');
Route::resource('evaluations', AEvaluationController::class)->names('evaluations');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
