<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\PaketmerchantController;
use App\Http\Controllers\SubkategoriController;
use App\Models\Merchant;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){

// kategori
Route::get('/kategori', [KategoriController::class,'index'] );
Route::get('/kategori/edit/{id}', [KategoriController::class,'edit'] );
Route::post('/kategori/edit/{id}', [KategoriController::class,'update'] );
Route::get('/kategori/tambah',[KategoriController::class,'tambah']);
Route::post('/kategori/tambah',[KategoriController::class,'baru']);
Route::post('/kategori/hapus',[KategoriController::class,'delete']);
Route::post('/kategori/status',[KategoriController::class,'updatestatus']);


// subkategori 

Route::get('/subkategori', [SubkategoriController::class,'index'] );
Route::get('/subkategori/tambah', [SubkategoriController::class,'create'] );
Route::get('/subkategori/edit/{id}', [SubkategoriController::class,'edit'] );
Route::post('/subkategori/tambah', [SubkategoriController::class,'tambah'] );
Route::post('/subkategori/edit', [SubkategoriController::class,'update'] );
Route::post('/subkategori/hapus', [SubkategoriController::class,'delete'] );
Route::post('/subkategori/status',[SubkategoriController::class,'updatestatus']);

// Merchant
Route::get('/datamerchant',[MerchantController::class,'index']);
Route::get('/verifikasimerchant',[MerchantController::class,'verifikasi']);
//
Route::get('/paketmerchant',[PaketmerchantController::class,'index']);      
Route::get('/paketmerchant/tambah',[PaketmerchantController::class,'create']);
Route::get('/paketmerchant/edit/{id}',[PaketmerchantController::class,'edit']);
Route::post('/paketmerchant/edit/{id}',[PaketmerchantController::class,'update']);
Route::post('/paketmerchant/tambah',[PaketmerchantController::class,'store']);
Route::post('/paketmerchant/hapus',[PaketmerchantController::class,'destroy']);
Route::post('/paketmerchant/status',[PaketmerchantController::class,'updatestatus']);

});
