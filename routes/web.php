<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('admin-pages-dashboard');

    Route::prefix('item')->group(function () {
        Route::get('', [ItemController::class,'index'])->name('admin-pages-item-index');
        Route::get('/datatables', [ItemController::class,'paginate'])->name('admin-pages-item-datatables');
        Route::get('create', [ItemController::class,'create'])->name('admin-pages-item-create');
        Route::post('store', [ItemController::class,'store'])->name('admin-pages-item-store');
        Route::get('edit/{id}', [ItemController::class,'edit'])->name('admin-pages-item-edit');
    });
});
