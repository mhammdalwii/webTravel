<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BoatController;


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

Route::get('/', [HomeController::class, 'index']);


Route::get('/detail/superior/amore', [HomeController::class, 'detailAmore'])->name('detail.amore');

Route::get('/detail/superior02', [HomeController::class, 'detailSuperior02'])->name('detail.superior02');

Route::get('/detail/superior03', [HomeController::class, 'detailSuperior03'])->name('detail.superior03');

Route::get('/detail/superior/superior04', [HomeController::class, 'detailSuperior04'])->name('detail.superior04');

Route::get('/all-categories', [BoatController::class, 'allCategories'])->name('all.categories');

Route::get('/detail/deluxe/deluxe01', [HomeController::class, 'detailDeluxe01'])->name('detail.deluxe01');

Route::get('/detail/deluxe/deluxe02', [HomeController::class, 'detailDeluxe02'])->name('detail.deluxe02');
