<?php

use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Models\Suratkeluar;
use App\Models\Suratmasuk;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tes', function () {
   return view('surat.masuk.surat');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // surat masuk
    Route::get('/suratmasuk',[SuratMasukController::class,'index'])->name('suratmasuk');
    Route::get('/createsuratmasuk',[SuratMasukController::class,'create'] )->name('buatsuratmasuk');
    Route::post('/createsuratmasuk',[SuratMasukController::class,'store'] );
    Route::get('/editsuratmasuk/{id}',[SuratMasukController::class,'edit'] );
    Route::post('/editsuratmasuk/{id}',[SuratMasukController::class,'update'] );
    Route::post('/hapussuratmasuk/{id}',[SuratMasukController::class,'destroy'] )->name('hapussuratmasuk');
    Route::get('suratmasuk/{id}',[SuratMasukController::class,'openfile'])->name('filesuratmasuk');
    // disposisi surat masuk
    Route::get('/createdisposisimasuk-{jenis}-{id}',[DisposisiController::class,'create'] )->name('buatdisposisimasuk');



    // surat keluar 
    Route::get('/suratkeluar',[SuratKeluarController::class,'index'])->name('suratkeluar');
    Route::get('/createsuratkeluar',[SuratKeluarController::class,'create'] )->name('buatsuratkeluar');
    Route::post('/createsuratkeluar',[SuratKeluarController::class,'store'] );
    Route::get('/editsuratkeluar/{id}',[SuratKeluarController::class,'edit'] );
    Route::post('/editsuratkeluar/{id}',[SuratKeluarController::class,'update'] );
    Route::get('suratkeluar/{id}',[SuratKeluarController::class,'openfile'])->name('filesuratkeluar');
    Route::post('/hapussuratkeluar/{id}',[SuratKeluarController::class,'destroy'] )->name('hapussuratkeluar');



});

require __DIR__.'/auth.php';
