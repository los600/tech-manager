<?php
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//Route::get('/', [IndexController::class,'index']);

Route::get('/', [IndexController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/indexAdmin', [IndexController::class, 'indexAdmin'])->name('indexAdmin');

Route::get('/events/edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventsController::class, 'update'])->name('events.update');
   




