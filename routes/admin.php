<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DelmaController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::group([

    'prefix' => '/dashboard',
    // 'namespace' => 'Dashboard',
    'middleware' => ['auth'],

],function(){

    Route::get('/', function () {
        return view('back.home');
    })->name('dashboard');
    
    Route::resource('services',ServiceController::class,[
       
        'index' => 'services',
        'store' => 'services.store',
        'create' => 'services.create',
        'show' => 'services.show',
        'edit' => 'services.edit',
        'update' => 'services.update',
        'destroy' => 'services.destroy',
      
    ]);

    Route::resource('doctors',DoctorsController::class,[
       
        'index' => 'doctors',
        'store' => 'doctors.store',
        'create' => 'doctors.create',
        'show' => 'doctors.show',
        'edit' => 'doctors.edit',
        'update' => 'doctors.update',
        'destroy' => 'doctors.destroy',
      
    ]);
    Route::resource('about',AboutController::class,[
       
        'index' => 'about',
        'store' => 'about.store',
        'create' => 'about.create',
        'show' => 'about.show',
        'edit' => 'about.edit',
        'update' => 'about.update',
        'destroy' => 'about.destroy',
      
    ]);
    Route::resource('news',NewsController::class,[
       
        'index' => 'news',
        'store' => 'news.store',
        'create' => 'news.create',
        'show' => 'news.show',
        'edit' => 'news.edit',
        'update' => 'news.update',
        'destroy' => 'news.destroy',
    ]);

    Route::resource('events',EventController::class,[
        'index' => 'events',
        'store' => 'events.store',
        'create' => 'events.create',
        'show' => 'events.show',
        'edit' => 'events.edit',
        'update' => 'events.update',
        'destroy' => 'events.destroy',
    ]);
    Route::resource('delma',DelmaController::class,[
        'index' => 'delma',
        'store' => 'delma.store',
        'create' => 'delma.create',
        'show' => 'delma.show',
        'edit' => 'delma.edit',
        'update' => 'delma.update',
        'destroy' => 'delma.destroy',
    ]);




  
});


