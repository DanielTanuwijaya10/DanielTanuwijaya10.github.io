<?php


use App\Http\Controllers\BooksController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\publishersController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [booksController::class, 'showAll']);
Route::get('/books/{id}', [booksController::class, 'showDetail']);

Route::get('/publishers', [publishersController::class, 'showAll']);
Route::get('/publishers/{id}', [publishersController::class, 'showDetail']);

Route::get('/category/{id}', [categoriesController::class, 'showBooks']);

Route::get('/contact', function () {
    return view('contact');
});




