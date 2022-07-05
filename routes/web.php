<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('home');
});

Auth::routes();


Route::group(['middleware' => ['auth','cekLevel:admin,pembeli']], function(){
    Route::get('/home',function(){
        return view('home');
    })->name('home');
    Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'ViewBuku'])->name('catalog');
    Route::get('/ViewArtikel', [App\Http\Controllers\HomeController::class, 'ViewArtikel'])->name('ViewArtikel');
    Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail']);
    Route::get('/beli/{id}', [App\Http\Controllers\HomeController::class, 'beli']);
    Route::get('/CekOut/{id}', [App\Http\Controllers\HomeController::class, 'CekOut']);
});

Route::group(['middleware' => ['auth','cekLevel:admin']], function(){
    Route::get('/create',function(){
        return view('create');
    })->name('create');
    Route::get('/tambah',function(){
        return view('TambahBarang');
    })->name('tambah');
    Route::get('/list', [App\Http\Controllers\HomeController::class, 'list'])->name('list');
    Route::post('/uploadArtikel', [App\Http\Controllers\HomeController::class, 'uploadArtikel'])->name('uploadArtikel');
    Route::post('/tambahbarang', [App\Http\Controllers\HomeController::class, 'barang'])->name('tambahbarang');
});

// Route::post('artikel/upload',[App\Http\Controllers\ArtikelController::class, 'store'])->name('store')->middleware('auth');

// Route::middleware('admin', function(){ return view('admin'); })->middleware('CekLevel:admin');

// Route::middleware(['auth', 'cekLevel:admin'])->group(function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'catalog'])->name('catalog');
//     Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
//     Route::get('/amin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
// });

// Route::middleware(['auth','cekLevel:admin'])->group(function(){
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'catalog'])->name('catalog');
//     Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
//     Route::get('/amin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
// });