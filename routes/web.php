<?php

use App\Http\Controllers\front\aboutController;
use App\Http\Controllers\front\delmaController;
use App\Http\Controllers\front\doctorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\News_EventsController;
use App\Http\Controllers\front\servicesController;
use Illuminate\Routing\Route as RoutingRoute;

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
Route::middleware(['auth:admin,web'])->group(function(){


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/news_events',[News_EventsController::class,'index'])->name('news_events');
Route::get('/detals/{news}',[News_EventsController::class,'show_news'])->name('news_show');
Route::get('/event/detals/{event}',[News_EventsController::class,'show_event'])->name('event_show');

Route::get('/doctorss',[doctorsController::class,'index'])->name('doctors');
Route::get('/doctors/{doctor}',[doctorsController::class,'show'])->name('doctors_show');

Route::get('/aboute',[aboutController::class,'index'])->name('front.about');

Route::get('/servicess',[servicesController::class,'index'])->name('front.services');
Route::get('/servicess/{service}',[servicesController::class,'show'])->name('services_show');

Route::get('/delmas',[delmaController::class,'test'])->name('front.delma');




});
require __DIR__.'/auth.php';
