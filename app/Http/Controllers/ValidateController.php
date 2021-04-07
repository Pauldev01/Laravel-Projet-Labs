<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin/Validate',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Validate  $validate
     * @return \Illuminate\Http\Response
     */
    public function show(Validate $validate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Validate  $validate
     * @return \Illuminate\Http\Response
     */
    public function edit(Validate $validate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Validate  $validate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
           
        
            $validation = $request->validate([
                'name' => 'required',
                'email' => 'required',
                ]);
    
            $update = User::find($id);
            $update->name = $request->name;
            $update->email = $request->email;
            // $update->role_id = Auth::user()->role_id;
            $update->check = Auth::user()->check;
    
    
            $update->save();
    
            return redirect('validation')->with('status','MODIFIER');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Validate  $validate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Validate $validate)
    {
        //
    }
    public function validateUser(Validate $validate, $id)
    {
        $user = User::find($id);
        $user->check = 1;
        $user-> save();
        return redirect()->back()->with('status','Modified');
    }
}
