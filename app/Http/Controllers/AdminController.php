<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->User=new User;
        $this->title="User";
        $this->path="admin/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= $this->User->getData();
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);
        return redirect('/admin')->with('flash_message_success', 'Admin Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=$this->User->findData($id);
        return view($this->path.'edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'unique:users,email,'.$id,
        ]);
        $this->User::find($id)->update($request->only('name','email'));
        if(isset($request->page_redirect)){
            return redirect('/home');
        }else{
            return redirect('/admin')->with('flash_message_success', 'Admin Updated Sucessfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset($id)){
            return response()->json(["success"=>false]);
        }
        if($this->User->deleteData($id)){
            return response()->json(["success"=>true]);
        }
    }

    public function myProfile()
    {
        $data=auth()->user();
        return view($this->path.'profile')->with('data',$data);
    }

    public function change()
    {
        $data=auth()->user();
        return view($this->path.'password')->with('data',$data);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        if(Hash::check( $request->current_password,auth()->user()->password)){
            $this->User::find(auth()->user()->id)->update(["password"=>Hash::make($request->password)]);
            return redirect('/home');
        }else{
            return redirect()->back()->withErrors(['current_password'=>"Invalid Current Password"]);
        }
    }

}
