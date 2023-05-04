<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

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

// TODO: bisogna criptare tutte le rotte parametriche con encrypt di laravel

Route::get('/', [PublicController::class, 'home']) ->name('homePage');

// rotte gestione prodotti
//rotta pagina creazione prodotto
Route::get('/create-product', [ProductController::class, 'create']) ->name('createProduct');
//rotta inserimento dati nel db
Route::post('/store-product', [ProductController::class, 'store']) ->name('storeProduct');
//index prodotti
Route::get('/index-product', [ProductController::class, 'index']) ->name('indexProduct');
Route::get('/show-product/{product}', [ProductController::class, 'show']) ->name('showProduct');


