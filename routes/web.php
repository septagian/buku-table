<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Regs\RegisterController;


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

Route::get('admin/login',[LoginController::class, 'login'])->name('login');
Route::post('admin/login/proses',[LoginController::class, 'proseslogin'])->name('proseslogin');

Route::get('/register',[RegisterController::class, 'register'])->name('register.index');
Route::post('/register',[RegisterController::class, 'store']);

Route::group([ 'middleware'=> ['userlogin']], function() {
    
    Route::get('books',[DashboardController::class, 'index'])->name('books.Dashboard');
    Route::get('books/buku',[BooksController::class, 'index'])->name('books.buku.index');
    Route::get('books/buku/create',[BooksController::class, 'create'])->name('books.buku.create');
    Route::post('books/buku/store',[BooksController::class, 'store'])->name('books.buku.store');
    Route::get('books/buku/{id}/edit',[BooksController::class, 'edit'])->name('books.buku.edit');
    Route::put('books/buku/{id}/update',[BooksController::class, 'update'])->name('books.buku.update');
    Route::get('books/buku/destroy/{id}',[BooksController::class, 'destroy'])->name('books.buku.destroy');
    Route::get('books/buku/calendar',[BooksController::class, 'calendar'])->name('books.buku.calendar');

    
});

    
    Route::get('postbook',[DashboardController::class, 'dashboard'])->name('postbook.dashboard');
    Route::get('postbook/postss',[PostController::class, 'index'])->name('postbook.postss.index');