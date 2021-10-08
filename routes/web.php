<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/inkubator', function () {
    return view('inkubator');
});

Route::get('/logowanie', function () {
    return view('login');
});
Route::post('logowanie', [UserController::class, 'login']);

Route::get('/utworz-konto', function () {
    return view('createAccount');
});
Route::post('utworz-konto', [UserController::class, 'store']);

Route::get('/panel', [ActionController::class, 'showPanel']);
Route::get('/panel/dodaj', [ActionController::class, 'showCreate']);
Route::post('/panel/dodaj', [ActionController::class, 'createAction']);
Route::get('/panel/zobacz/{id}', [ActionController::class, 'showActionPanel']);
Route::get('/usun-akcje/{id}', [ActionController::class, 'delete']);

Route::post('/panel/zobacz/dodaj-informacje', [ActionController::class, 'addMoreInfo']);
Route::post('/zobacz/zmien-status', [ActionController::class, 'changeStatus']);

Route::post('/biore-udzial',  [ActionController::class, 'join']);

Route::get('/wybierz-miasto', [CityController::class, 'show']);

Route::get('/akcje/{id}', [ActionController::class, 'show']);
Route::get('/akcje/zobacz/{id}', [ActionController::class, 'showAction']);
Route::get('/wyloguj', [UserController::class, 'logout']);