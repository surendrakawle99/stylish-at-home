<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->Product=new Product;
        $this->title="Product";
        $this->path="product/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->Product->getData();
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
        $service_data= $service->getData();
        return view($this->path.'add')->with('service_data',$service_data);
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
            'product_name' => 'required',
            'service_id' => 'required',
            'price' => 'required',
            'product_ecommerce_url' => 'required',
        ]);
       
        $Product=$this->Product->storeData($request->all());
        return redirect('/product')->with('flash_message_success', 'Product Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=$this->Product->findData($id);
        $service=new Service;
        $service_data= $service->getData();
        return view($this->path.'edit')->with(compact('data','service_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'product_name' => 'required',
            'service_id' => 'required',
            'price' => 'required',
            'product_ecommerce_url' => 'required',
        ]);
       
   
    $this->Product->updateData($id, $request->only('product_name','service_id','price','product_ecommerce_url'));
    return redirect('/product')->with('flash_message_success', 'Product Updated Sucessfully!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->Product->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }
}
