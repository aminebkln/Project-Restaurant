<?php

use App\Models\Reservation;

use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

// ajouter la route '/' associée avec l'action MainController::index()
// MainController est une classe et index est une méthode de cette classe
// cette route est nommée 'main.index'
Route::get('/', [HomeController::class, 'index'])->name('main.index');
Route::get('/test', [HomeController::class, 'test'])->name('main.test');
Route::post('/test', [HomeController::class, 'postTest'])->name('post.test');
Route::post('/', [HomeController::class, 'storeReservation'])->name('post.reservation');
Route::get('/carte', [MainController::class, 'carte'])->name('main.carte');
Route::get('/test-resa', [MainController::class, 'testReservation'])->name('main.testReservation');



//**//back office
 // afichage du formulaire reservation
 Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('admin.reservation.index');
// afichage du formulaire creation
Route::get('/admin/reservation/create', [ReservationController::class, 'create'])->name('admin.reservation.create');
//
Route::post('/admin/reservation', [ReservationController::class, 'store'])->name('admin.reservation.store');

// affichage du formulaire de modification de réservation
Route::get('/admin/reservation/{id}/edit', [ReservationController::class, 'edit'])->name('admin.reservation.edit');
// traitement des données du formulaire de modification
Route::put('/admin/reservation/{id}', [ReservationController::class, 'update'])->name('admin.reservation.update');


Route::delete('/admin/reservation/{id}/destroy', [ReservationController::class, 'destroy'])->name('admin.reservation.destroy');
