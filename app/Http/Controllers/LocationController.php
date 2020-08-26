<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct(){
        $this->Location=new Location;
        $this->title="Location";
        $this->path="location/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->Location->getData();
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
            'location' => 'required|unique:locations',
        ]);
       
        $Location=$this->Location->storeData($request->all());
        return redirect('/location')->with('flash_message_success', 'Location Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $Location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=$this->Location->findData($id);
        return view($this->path.'edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate( [
            'location' => 'required|unique:locations',
        ]);
   
   
    $this->Location->updateData($id, $request->only('location'));
    return redirect('/location')->with('flash_message_success', 'Location Updated Sucessfully!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->Location->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }
}
