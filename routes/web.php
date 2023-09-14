<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Attendee;
use App\Http\Controllers\EventOrganizer;
use App\Http\Controllers\EventController;
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

//Routes that handles payment
Route::get('/payment',[PaymentController::class,'stripe']);
Route::post('/payment', [PaymentController::class,'stripePost'])->name('stripe.post');
//Route::get('view', [PaymentController::class, 'afterPayment']);

//Route to Manage Reviews
Route::get('/review',[ReviewController::class,'review'])->name('review');
Route::post('/reviewstore',[ReviewController::class,'reviewStore'])->name('review-store');

//Routes to render the analytic page
Route::get('/analytics',[SecondDashboardController::class,'index']);

//Routes to implement search functionality
Route::any('/search',[SearchController::class,'search']);
  
//Define route to to navigate to rate event
Route::get('/eventrate', [ProfileController::class,'getEvent']);

//Route that renders the QR Code page
Route::get('/qrcode', [QrCodeController::class, 'index']);

//Route to render status
Route::get('/status/update', [Attendee::class, 'updateStatus'])->name('update.status');

//Route for mark as read notification
Route::get('/mark-as-read', [Attendee::class,'markAsRead'])->name('mark-as-read');

Route::group(['middeware' => ['auth']], function(){
Route::get('/dashboard',[DashboardController::class,'first'])->name('dashboard');
});

 Route::get('/attendee',[Attendee::class,'index'])->name('attendee');
 Route::get('/admin',[Admin::class,'index'])->name('admin');
 Route::get('/eventorganizer',[EventOrganizer::class,'index'])->name('eventorganizer'); 
 