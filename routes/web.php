<?php

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

//Obat
Route::get('/obat', [\App\Http\Controllers\ObatController::class, 'getallobat'])->name('tampilobat'); // Read
Route::get('/obat/tambah', function () {return view('obat.tambah');})->name('tambahobat'); // Create-Form
Route::post('/obat', [\App\Http\Controllers\ObatController::class, 'saveobat'])->name('saveobat'); // Save
Route::get('/obat/{id}', [\App\Http\Controllers\ObatController::class, 'editobat'])->name('editobat'); // Edit-Form
Route::put('/obat/{id}', [\App\Http\Controllers\ObatController::class, 'updateobat'])->name('updateobat'); // Update
Route::delete('/obat/{id}', [\App\Http\Controllers\ObatController::class, 'deleteobat'])->name('deleteobat'); // Delete

Route::get('/pasien', [\App\Http\Controllers\PasienController::class, 'getallpasien'])->name('tampilpasien'); // Read
Route::get('/pasien/tambah', function () {return view('pasien.tambah');})->name('tambahpasien'); // Create-Form
Route::post('/pasien', [\App\Http\Controllers\PasienController::class, 'savepasien'])->name('savepasien'); // Save
Route::get('/pasien/{id}', [\App\Http\Controllers\PasienController::class, 'editpasien'])->name('editpasien'); // Edit-Form
Route::put('/pasien/{id}', [\App\Http\Controllers\PasienController::class, 'updatepasien'])->name('updatepasien'); // Update
Route::delete('/pasien/{id}', [\App\Http\Controllers\PasienController::class, 'deletepasien'])->name('deletepasien'); // Delete
