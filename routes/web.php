<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Attendee;
use App\Http\Controllers\EventOrganizer;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventViewController;

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
    return view('welcome');
   // return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/show',[EventController::class,'showData'])->name('show');

Route::get('/eventShow',[EventViewController::class,'index'])->name('eventShow');
Route::get('/edit/{event}',[EventViewController::class,'edit'])->name('edit');
// Route::get('/edit/{id}', [EventViewController::class, 'edit'])->name('edit');

Route::put('/update/{event}',[EventViewController::class,'update'])->name('update');
Route::delete('/delete/{event}',[EventViewController::class,'destroy'])->name('delete');

// Route::get('/edit/{event}', [EventViewController::class, 'edit'])->name('edit');
// Route::put('/update/{event}', [EventViewController::class, 'update'])->name('update');





Route::group(['middeware' => ['auth']], function(){
Route::get('/dashboard',[DashboardController::class,'first'])->name('dashboard');
});

 Route::get('/attendee',[Attendee::class,'index'])->name('attendee');
 Route::get('/admin',[Admin::class,'index'])->name('admin');
 Route::get('/eventorganizer',[EventOrganizer::class,'index'])->name('eventorganizer'); 
 