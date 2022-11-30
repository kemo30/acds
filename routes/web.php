<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\News_EventsController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/news_events',[News_EventsController::class,'index'])->name('news_events');
Route::get('/detals/{news}',[News_EventsController::class,'show'])->name('news_show');


Route::get('/test',[
    ServiceController::class,'test'
]);



require __DIR__.'/auth.php';
