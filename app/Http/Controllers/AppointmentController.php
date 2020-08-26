<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct(){
        $this->Appointment=new Appointment;
        $this->title="Appointment";
        $this->path="appointment/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->Appointment->getData();
        return view($this->path.'index')->with(compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'display_order' => 'required|unique:Appointments',
            'article_id' => 'required|unique:Appointments',
            'is_active' => 'required',
        ]);
       
        $Appointment=$this->Appointment->storeData($request->all());
        return redirect('/latestCommunication')->with('flash_message_success', 'Latest Communication Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $Appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $Appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $Appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=$this->Appointment->findData($id);
        return view($this->path.'edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $Appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    // dd($request);
    $request->validate( [
        'display_order' => 'required|unique:Appointments,display_order,'.$id,
        'article_id' => 'required|unique:Appointments,article_id,'.$id,
        'is_active' => 'required',
    ]);
   
   
    $this->Appointment->updateData($id, $request->only('display_order','article_id','is_active','updated_by'));
    return redirect('/latestCommunication')->with('flash_message_success', 'Latest Communication Updated Sucessfully!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $Appointment
     * @return \Illuminate\Http\Response
     */
    public function destroyMethod($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->Appointment->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }
}
