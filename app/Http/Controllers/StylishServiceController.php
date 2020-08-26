<?php

namespace App\Http\Controllers;

use App\StylishService;
use App\Service;
use App\Stylish;
use Illuminate\Http\Request;

class StylishServiceController extends Controller
{
    public function __construct(){
        $this->StylishService=new StylishService;
        $this->title="StylishService";
        $this->path="stylish-service/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id="")
    {
        $data=Stylish::with('services')->where('id',$id)->get();
        // dd($data->toJson());
        
        $stylish=Stylish::find($id);
        if(isset($stylish->id)){
            $request->session()->put('stylish_id',$id);
            $request->session()->put('stylish_name',$stylish->stylish_name);
        }
        // $data= $this->StylishService->getData($id);
        return view($this->path.'index')->with(compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $service=new Service;
        $service_data=$service->getData();
        return view($this->path.'add')->with(compact('service_data'));
    }

    /**
     * Store a 
     * newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate( [
            'service_id' => 'required',
            'service_cost' => 'required',
            'service_description' => 'required',
        ]);
        $stylish=Stylish::find(session()->get('stylish_id'));
        $service=Service::find($request->service_id);  
        $stylish->services()->attach([$request->service_id=>
                                        [
                                            "service_description"=>$request->service_description,
                                            "service_cost"=>$request->service_cost,
                                        ]
                                     ]);
        return redirect('/stylish/'.session()->get('stylish_id').'/service')->with('flash_message_success', 'Stylish Service Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StylishService  $StylishService
     * @return \Illuminate\Http\Response
     */
    public function show(StylishService $StylishService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StylishService  $StylishService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=new Service;
        $service_data=$service->getData();
        $data=$this->StylishService->findData($id);
        return view($this->path.'edit')->with(compact('data','service_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StylishService  $StylishService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate( [
            'service_id' => 'required',
            'service_cost' => 'required',
            'service_description' => 'required',
        ]);
        $this->StylishService->updateData($id, $request->only('service_id','service_cost','service_description',));
    return redirect('/stylish/'.session()->get('stylish_id').'/service')->with('flash_message_success', 'Stylish Service Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StylishService  $StylishService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->StylishService->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }
}
