<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\FlavoursController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
    Route::get('/create', [RestaurantController::class, 'create'])->name('create');
    Route::post('/store', [RestaurantController::class, 'store'])->name('store');
    Route::get('/', [RestaurantController::class, 'index'])->name('index');
    Route::get('/{id}', [RestaurantController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [RestaurantController::class, 'edit'])->name('edit');
    Route::put('/{id}', [RestaurantController::class, 'update'])->name('update');
    Route::delete('/{id}', [RestaurantController::class, 'destroy'])->name('destroy');

   
});
Route::group(['prefix' => 'restaurant/{id}/menu', 'as' =>'menu.'], function () {
    
    Route::get('/create', [MenuController::class,'create'])->name('create');
    Route::post('/store', [MenuController::class, 'store'])->name('store');
    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/show', [MenuController::class, 'show'])->name('show');
    // Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    // Route::put('/{id}', [MenuController::class, 'update'])->name('menu.update');
    // Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
   
});
Route::group(['prefix' => 'restaurant/{id}/menu/{menuid}/meal', 'as'=>'meal.'], function () {
    Route::get('/create', [MealsController::class,'create'])->name('create');
    Route::post('/store', [MealsController::class, 'store'])->name('store');
    Route::get('/', [MenuController::class, 'index'])->name('index');
//     Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
//     Route::put('/{id}', [MenuController::class, 'update'])->name('menu.update');
//     Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
   
});
Route::group(['prefix' => 'restaurant/{id}/menu/{menuid}/flavour', 'as'=>'flavour.'], function () {
    Route::get('/create', [flavoursController::class,'create'])->name('create');
    Route::post('/store', [flavoursController::class, 'store'])->name('store');
//     Route::get('/', [MenuController::class, 'index'])->name('menu.index');
//     Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
//     Route::put('/{id}', [MenuController::class, 'update'])->name('menu.update');
//     Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
   
});

