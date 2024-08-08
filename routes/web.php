<?php

use App\Http\Controllers\pembayaranController443;
use App\Http\Controllers\pendaftaranController465;
use App\Http\Controllers\perpanjanganController450;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [userController::class, 'form_login']);
Route::get('tentang', [userController::class, 'tentang']);
Route::get('kontak', [userController::class, 'kontak']);
Route::get('form', [userController::class, 'form']);

Route::post('action_login', [userController::class, 'action_login']);
Route::get('dashboard', [userController::class, 'home']);


Route::get('perpanjangan', [perpanjanganController450::class, 'perpanjangan']);
Route::post('tambah_perpanjangan', [perpanjanganController450::class, 'tambah']);
Route::get('tabel450', [perpanjanganController450::class, 'tabel']);
Route::post('hapus450{id}', [perpanjanganController450::class, 'hapus'])->name('hapus450');


Route::get('pendaftaran', [pendaftaranController465::class, 'pendaftaran']);
Route::post('tambah_pendaftaran', [pendaftaranController465::class, 'tambah']);
Route::get('tabel465', [pendaftaranController465::class, 'tabel']);
Route::post('hapus465{id}', [pendaftaranController465::class, 'hapus'])->name('hapus465');


Route::get('pembayaran', [pembayaranController443::class, 'pembayaran']);
Route::post('tambah_pembayaran', [pembayaranController443::class, 'tambah']);
Route::get('tabel443', [pembayaranController443::class, 'tabel']);
Route::post('hapus443{id}', [pembayaranController443::class, 'hapus'])->name('hapus443');
