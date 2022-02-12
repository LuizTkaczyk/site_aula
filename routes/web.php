<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// Route::get('/posts/premium', [PostController::class, 'premium']);
// Route::resource('posts', 'PostController');

//FUNÇÃO ANONIMA NA ROTA - closure
// Route::get('/users', function(){
//     echo "<h1>Rota com função anonima</h1>";
// });

// Route::view('/form', 'form');

// //fallback caso a pagina não exista, retornando um 404
// Route::fallback(function(){
//     echo "<h1>Pagina não encontrada</h1>";
// });

// Route::redirect('/users/add', url('/form'), 301);

// Route::get('/artigos', [PostController::class, 'index'])->name('posts.index');
// Route::get('/artigos/index', [PostController::class, 'indexRedirect'])->name('posts.indexRedirect');

// Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null){
//     var_dump($id, $comment);
// })->where(['id' =>'[0-9]+' ,'comment' =>'[a-z0-9]+']); //somente sera aceito id de numeros

//Route::get('/users/{id}/comments/{comment?}',[UserController::class, 'userComments'])->where(['id' =>'[0-9]+' ,'comment' =>'[a-z0-9]+']);

//Route::get('/users/1',[UserController::class, 'inspect']);

Route::prefix('admin')->group(function(){
    Route::view('/form', 'form');
});

Route::name('posts')->group(function(){
    Route::get('/admin/posts/index', [PostController::class,'index'])->name('index');
    Route::get('/admin/posts', [PostController::class, 'show'])->name('show');
});