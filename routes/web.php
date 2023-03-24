<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ClientController;
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
// admin
Route::get('/admin', [AdminController::class,'index'])->middleware('auth','admin');
Route::get('/admin/nouvelle-voiture', [AdminController::class,'new'])->middleware('auth','admin');
Route::post('/admin/nouvelle-voiture', [VoitureController::class,'new'])->middleware('auth','admin')->name('nouvelle');
Route::get('/admin/voitures', [AdminController::class,'voitures'])->middleware('auth','admin')->name('admin.voitures');
Route::get('/admin/clients', [AdminController::class,'clients'])->middleware('auth','admin')->name('admin.clients');
Route::get('/admin/locations', [AdminController::class,'locations'])->middleware('auth','admin')->name('admin.locations');

// client
Route::get('/', [ClientController::class,'index'])->name('home');
Route::get('/about', [ClientController::class,'about'])->name('about');
Route::get('/voitures', [ClientController::class,'voitures'])->name('client.voitures');
Route::get('/voitures/{id}', [ClientController::class,'show_voiture']);
Route::get('/locations', [ClientController::class,'show_locations'])->middleware('auth');
Route::post('/louer', [ClientController::class,'new_location'])->name('louer')->middleware('auth');
Route::get('/locations/{id}', [ClientController::class,'show_locations_form'])->middleware('auth');
Route::get('/rendre_locations/{id}/{id2}', [ClientController::class,'rendre_location'])->middleware('auth');


// voiture
Route::get('/admin/voitures/{id}', [AdminController::class,'voiture'])->middleware('auth');
Route::post('/admin/edit/', [VoitureController::class,'edit'])->middleware('auth')->name('edit');
Route::get('/admin/voiture/edit/{id}', [AdminController::class,'edit'])->middleware('auth')->name('admin.edit');
Route::get('/admin/voiture/delete/{id}', [VoitureController::class,'delete'])->middleware('auth')->name('admin.delete');
Route::post('/admin/voiture/edit/photo/', [VoitureController::class,'edit_photo'])->middleware('auth')->name('edit.photo');

// auth
Route::get('/login', [AuthController::class,'show_login'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('user.login');
Route::get('/register', [AuthController::class,'show_register'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('user.register');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
