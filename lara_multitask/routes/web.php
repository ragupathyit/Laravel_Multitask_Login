<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CommentsController;

Route::get('/admin', [AdminsController::class, 'loginadmin']);
Route::post('/login-admin', [AdminsController::class, 'adminUser'])->name('login-admin');
Route::get('/comment-admin', [AdminsController::class, 'comments']);

Route::get('/customer', [CustomersController::class, 'logincustomer']);
Route::post('/login-customer', [CustomersController::class, 'adminUser'])->name('login-customer');
Route::get('/comment-customer', [CustomersController::class, 'comments']);

//Route::get('/comments', [CommentsController::class, 'index']);
Route::Resource('/comments', CommentsController::class);
