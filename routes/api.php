<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiresources([

    'categories'=>CategoryController::class,
    'evaluations'=> EvaluationController::class,
    'events'=> EventController::class,
    'matieres'=> MatiereController::class,

    'reclamations'=> ReclamationController::class,
    'users'=> UserController::class,



]);


Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);
        Route::get('/user', [App\Http\Controllers\Auth\AuthController::class, 'user']);
        Route::get('/notes',[NoteController::class,'index']);
        Route::prefix('reclamation')->group(function () {
            Route::get('/',[ PersonController::class, 'getAll']);
            Route::post('/',[ PersonController::class, 'create']);
            Route::delete('/{id}',[ PersonController::class, 'delete']);
            Route::get('/{id}',[ PersonController::class, 'get']);
            Route::put('/{id}',[ PersonController::class, 'update']);
        });

    });


});

