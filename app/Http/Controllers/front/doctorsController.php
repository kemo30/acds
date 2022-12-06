<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctors;
use App\Models\User;

class doctorsController extends Controller
{
    public function index(){
        $doctors=doctors::paginate();
        return view('front.doctors',[
            'doctors' => $doctors,
        ]);
    }
    public function show(doctors $doctor){
        $user = User::where('id',2)->first();
        $user->notify(new \App\Notifications\TestNotification());
        return view('front.doctor-profile',[
            'doctor' => $doctor,
        ]);
    }
}
