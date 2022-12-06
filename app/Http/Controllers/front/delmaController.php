<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\delma;
use App\Models\User;
use Illuminate\Http\Request;

class delmaController extends Controller
{
    public function index(){
        
        $hamada=delma::get();
        $user = User::where('id',2)->first();
        $user->notify(new \App\Notifications\TestNotification());
       
        return view('front.delma_detals',compact('hamada'));
    }
    public function test(){
       
        $delmas= delma::get();

        return view('front.delma_detals',['delma'=>$delmas]);
    }
    
}
