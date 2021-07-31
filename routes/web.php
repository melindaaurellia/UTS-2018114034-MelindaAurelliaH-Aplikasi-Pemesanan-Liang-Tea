<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TransController;
use App\Http\Controllers\GroupsController;
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

Route::get('', [DrinksController::class, 'index']);
Route::get('/drinks/welcome',[DrinksController::class, 'welcome']);
//Route::get('/drinks', [DrinksController::class, 'index']);
//Route::get('/drinks/create', [DrinksController::class, 'create']);
//Route::post('/drinks', [DrinksController::class, 'store']);
//Route::get('/drinks/{id}', [DrinksController::class, 'show']);
//Route::get('/drinks/{id}/edit', [DrinksController::class, 'edit']);
//Route::put('/drinks/{id}', [DrinksController::class, 'update']);
//Route::delete('/drinks/{id}', [DrinksController::class, 'destroy']);

Route::resources([
    'drinks' => DrinksController::class,
    'data' => DataController::class,
    'trans' => TransController::class,
    'groups' => GroupsController::class,
]);
Route::get('/drinks/addmember/{drink}', [DrinksController::class, 'addmember']);
Route::put('/drinks/addmember/{drink}', [DrinksController::class, 'updateaddmember']);
Route::put('/drinks/deleteaddmember/{drink}', [DrinksController::class, 'deleteaddmember']);

Route::get('/groups/addmember/{group}', [GroupsController::class, 'addmember']);
Route::put('/groups/addmember/{group}', [GroupsController::class, 'updateaddmember']);
Route::put('/groups/deleteaddmember/{group}', [GroupsController::class, 'deleteaddmember']);