<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $appointment= appointment::pagnate();
        return view('back.appointment.index',[
            'appointment' => $appointment,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.appointment.cerate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'message'=>'required',
            ]);

        appointment::create($request->all());
        return Redirect('dashboard/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {
        return view('back.appointment.cerate');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        return view('back.appointment.edit',['appointment'=>$appointment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        
         $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'message'=>'required',
            ]);

            $appointment->update($request->all());
            return Redirect('dashboard/index');
    
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        $appointment->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
