<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('processLogin');;
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'processRegister'])->name('processRegister');
Route::get('logout', function () {
    Auth::logout();

    Alert::success('Berhasil', 'Berhasil keluar dari akun!');
    return redirect(route('login'))->with('success', 'Berhasil keluar dari akun');
})->name('logout');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        Route::get('create', [AdminCategoryController::class, 'create'])->name('create');
        Route::post('create', [AdminCategoryController::class, 'store'])->name('store');
        Route::get('{slug}/edit', [AdminCategoryController::class, 'edit'])->name('edit');
        Route::post('{slug}/edit', [AdminCategoryController::class, 'update'])->name('update');
        Route::post('{slug}/delete', [AdminCategoryController::class, 'delete'])->name('delete');;
    });
});
