<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/form', 'form');

Route::get('/users/1', [UserController::class, 'index']);
Route::get('/getData', [UserController::class, 'getData']);
Route::post('/postData', [UserController::class, 'postData']);
Route::put('/users/1', [UserController::class, 'testePut']);
Route::patch('/users/1', [UserController::class, 'testePatch']);
Route::match(['put', 'patch'],'/users/2', [UserController::class, 'testeMatch']);