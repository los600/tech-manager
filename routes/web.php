<?php
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [IndexController::class,'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/susbcribe/{id}', [EventsController::class, 'togglesusbcribe'])->name('event.subscribe')->middleware('auth');

Route::get('/myEvents', [HomeController::class, 'showEvents'])->name('myEvents');

Route::middleware(['admin'])->group(function () {
    Route::get('/indexAdmin', [IndexController::class, 'indexAdmin'])->name('indexAdmin');
    Route::get('/indexAdmin/admin', [EventsController::class, 'create'])->name('events.create');
    Route::delete('/indexAdmin/{id}',[EventsController::class, 'destroy'])->name('events.destroy');
    Route::get('/event/edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
   
    Route::put('/indexAdmin/update/{id}', [EventsController::class, 'update'])->name('events.update');
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::post('/indexAdmin/admin', [EventsController::class, 'store'])->name('events.store');
});





   



