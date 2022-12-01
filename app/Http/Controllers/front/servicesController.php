<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;

class servicesController extends Controller
{
    public function index(){
        $sevices = service::all();
        return view('front.services',[
            'services' => $sevices,
        ]);
    }
    public function show(service $service){
        return view('front.service-details',[
            'service' => $service,
        ]);
    }
}
