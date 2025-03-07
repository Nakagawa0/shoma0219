<?php

use Illuminate\Support\Facades\Route;
use App\HttP\Controllers\PostController;
/*
|---------------------------------------------------------------------------
| Web Routes
|----------------------------we-----------------------------------------------
|
| Here is where you can register web routes for your application. These 
| routes are lacated by the RouteServisePrvider within a group which
| conteins the "web" middleware group. Now create something great! 
|
*/

Route::get('/',[PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::post('/posts', [PostController::class, 'store']);
// '/post/{対象のデータのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する。

