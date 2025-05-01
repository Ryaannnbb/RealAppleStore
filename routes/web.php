
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\RedirectMiddleware;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'is_admin'])->group(function () {
    Route::get('/dashboard', function () { 
        return view('admin.dashboard'); 
    })->name('dashboard');

    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::get('/', 'index')->name('category.index');
        Route::get('/create', 'create')->name('category.create');
        Route::post('/store', 'store')->name('category.store');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
        Route::put('/update/{id}', 'update')->name('category.update');
        Route::delete('/destroy/{id}', 'destroy')->name('category.destroy');
    });

    Route::controller(ProductController::class)->prefix('product')->group(function () {
        Route::get('/', 'index')->name('product.index');
        Route::get('/create', 'create')->name('product.create');
        Route::post('/store', 'store')->name('product.store');
        Route::get('/edit/{id}', 'edit')->name('product.edit');
        Route::put('/update/{id}', 'update')->name('product.update');
        Route::delete('/destroy/{id}', 'destroy')->name('product.destroy');
    });
});

Route::post('/logout', function () {
    Session::flash('logout_success', 'Anda berhasil logout.');
    Auth::logout();

    return redirect('/login');
})->name('logout');