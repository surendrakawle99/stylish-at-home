<?php

namespace App\Http\Controllers;

use App\Stylish;
use App\Location;
use App\Service;
use Illuminate\Http\Request;

class StylishController extends Controller
{
    
    public function __construct(){
        $this->Stylish=new Stylish;
        $this->title="Stylish";
        $this->path="stylish/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->Stylish->getData();
        return view($this->path.'index')->with(compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = new Location;
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
            'stylish_name' => 'required',
            'salon_name' => 'required',
            'stylish_email' => 'required',
            'stylish_mobile' => 'required',
            'stylish_address' => 'required',
            'location_id' => 'required',
            'std_fee' => 'required',
            'payment_method' => 'required',
        ]);
       
        $stylish=$this->Stylish->storeData($request->only('stylish_name', 'salon_name', 'stylish_email', 'stylish_mobile','stylish_address','location_id', 'std_fee','payment_method'));
        $location = Location::find($request->location_id_1);
        $stylish->location()->attach($location);
        return redirect('/stylish')->with('flash_message_success', 'Stylish Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stylist  $stylist
     * @return \Illuminate\Http\Response
     */
    public function show(Stylist $stylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stylist  $stylist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = new Location;
        $location_data=$location->getData();
        $data=Stylish::with('location')->where('id',$id)->first();
        // $data=$this->Stylish->findData($id);
        return view($this->path.'edit')->with(compact('data','location_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stylist  $stylist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate( [
            'stylish_name' => 'required',
            'salon_name' => 'required',
            'stylish_email' => 'required',
            'stylish_mobile' => 'required',
            'stylish_address' => 'required',
            'location_id' => 'required',
            'std_fee' => 'required',
            'payment_method' => 'required',
        ]);
    \DB::select("delete FROM stylish_location WHERE stylish_id=".$id);
    $this->Stylish->updateData($id, $request->only('stylish_name','salon_name','stylish_email','stylish_mobile','stylish_address','location_id','std_fee','payment_method'));
    $location = Location::find($request->location_id_1);
    $stylish= Stylish::find($id);
    $stylish->location()->attach($location);
    return redirect('/stylish')->with('flash_message_success', 'Stylish Updated Sucessfully!');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stylish  $Stylish
     * @return \Illuminate\Http\Response
     */
    public function destroyMethod($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->Stylish->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }
}
