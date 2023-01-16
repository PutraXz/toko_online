<?php

use App\Http\Controllers\Admin\DeleteProducts;
use App\Http\Controllers\Admin\EditProducts;
use App\Http\Controllers\Admin\ShowProducts as AdminShowProducts;
use App\Http\Controllers\Admin\UploadProducts;
use App\Http\Controllers\User\ShowProducts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'check-level:admin'], function (){
        Route::view('about', 'about')->name('about');
        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
        Route::get('admin/product', AdminShowProducts::class)->name('product.show');
        Route::post('admin/product', UploadProducts::class)->name('product.upload');
        Route::get('admin/product/{id}', [EditProducts::class, 'edit'])->name('product.edit');
        Route::post('admin/product/{id}',[EditProducts::class, 'update'])->name('product.update');
        Route::delete('admin/product/{id}', DeleteProducts::class)->name('product.delete');
    });
    Route::group(['middleware' => 'check-level:user'], function (){
        Route::get('/product', ShowProducts::class);
    });
});
