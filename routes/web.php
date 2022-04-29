<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/create-file', [PageController::class, 'createFile']);
Route::get('/edit-post/{id}', [PageController::class, 'editPost']);
Route::get('/delete-post/{id}', [PageController::class, 'deletePost']);

Route::put('/update-post/{id}', [PageController::class, 'updatePost']);

Route::post('/posts', [PageController::class, 'store']);
