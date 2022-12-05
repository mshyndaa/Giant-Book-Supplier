<?php

use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PublisherDetailController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);

//bookdetail
Route::get('/bookdetail/{book_id}', [BookDetailController::class, 'showBookDetail']);

//contact
Route::get('/contact', [ContactController::class, 'contact']);

//category
Route::get('/category/{category_id}', [CategoryController::class, 'showCategory']);

//publisher
Route::get('/publisher', [PublisherController::class, 'showPublisher']);

// publisher detail
Route::get('/publisherdetail/{publisher_id}', [PublisherDetailController::class, 'showPublisherDetail']);