<?php

namespace App\Http\Controllers;

use App\Service;
use App\StylishService;
use App\Stylish;
use App\Location;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(){
        $this->Service=new Service;
        $this->title="Service";
        $this->path="service/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->Service->getData();
        return view($this->path.'index')->with(compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location=new Location;
        $location_data=$location->getData();
        return view($this->path.'add')->with(compact('location_data'));
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
            'service_title' => 'required',
            // 'service_cost_range' => 'required',
            // 'location_id' => 'required',
        ]);
       
        $Service=$this->Service->storeData($request->all());
        return redirect('/service')->with('flash_message_success', 'Service Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $Service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location=new Location;
        $location_data=$location->getData();
        $data=$this->Service->findData($id);
        return view($this->path.'edit')->with(compact('data','location_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate( [
            'service_title' => 'required',
            // 'service_cost_range' => 'required',
            // 'location_id' => 'required',
        ]);
    $this->Service->updateData($id, $request->only('service_title'));
    return redirect('/service')->with('flash_message_success', 'Service Updated Sucessfully!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        $service =Service::find($id);
        $stylish = new Stylish;
        StylishService::where('service_id',$id)->delete();
        // Service::find($id)->delete()
        if($this->Service->deleteData($id)){
            return response()->json(["success"=>true]);
        }
        
    }
}
