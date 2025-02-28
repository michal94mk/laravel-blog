<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Trasy dostępne dla wszystkich
Route::resource('posts', PostController::class)->only(['index', 'show']); // Brak middleware dla tych dwóch metod
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Trasy dostępne tylko dla zalogowanych
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::resource('posts', PostController::class)->except(['index', 'show']);
});


// Trasy dostępne tylko dla administratorów
Route::middleware([AdminMiddleware::class, 'auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::resource('posts', PostController::class)->names([
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'show' => 'admin.posts.show',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]);
    
    Route::resource('comments', CommentController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
});


require __DIR__.'/auth.php';
