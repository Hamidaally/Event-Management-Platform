<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Attendee;
use App\Http\Controllers\EventOrganizer;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventViewController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SecondDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QrCodeController;

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

Route::get('/', [SecondDashboardController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route that sends data to the database
Route::post('/show',[EventController::class,'showData'])->name('show');
//Route that displays data
Route::get('/eventShow',[EventViewController::class,'index'])->name('eventShow');

//Route that handles crud
Route::get('/edit/{event}',[EventViewController::class,'edit'])->name('edit');
Route::put('/update/{event}',[EventViewController::class,'update'])->name('update');
Route::delete('/delete/{event}',[EventViewController::class,'destroy'])->name('delete');

Route::group(['middeware' => ['auth']], function(){
Route::get('/dashboard',[DashboardController::class,'first'])->name('dashboard');
});

 Route::get('/attendee',[Attendee::class,'index'])->name('attendee');
 Route::get('/admin',[Admin::class,'index'])->name('admin');
 Route::get('/eventorganizer',[EventOrganizer::class,'index'])->name('eventorganizer'); 

    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{id}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
    Route::put('/tickets/{id}', [TicketController::class, 'update'])->name('tickets.update');
    Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');
    Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');




