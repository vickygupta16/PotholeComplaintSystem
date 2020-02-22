<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Complaint; 
use App\User;
use App\Ward;
use App\SubAdmin;
use DB;

class SAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('sacontrol.index')->with('users',$users);
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'user_id'=>'required',
            'w_id'=>'required'
        ]);
        $SubAdmin = new subadmin;
        $SubAdmin->name = $request->input('name');
        $SubAdmin->email = $request->input('email');
        $SubAdmin->user_id = $request->input('user_id');
        $SubAdmin->w_id = $request->input('w_id'); 
        $SubAdmin->save();
        //$users = new User;
        //$users->user_id = $request->input('user_id');
        User::where("email",$SubAdmin->email)->update(array('user_id'=>'1'));
        //Model::where("x",1)->where("y",2)->update(array('key' => 'new_value', ...));
        return redirect('/sacontrol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $SubAdmin = subadmin::all();
        return view('sacontrol.show')->with('SubAdmin',$SubAdmin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $wards = Ward::all();
        return view('sacontrol.edit',['users'=>$users])->with('wards',$wards);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SubAdmin = subadmin::find($id);
        User::where("email",$SubAdmin->email)->update(array('user_id'=>'0'));
        $SubAdmin->delete();
        
        return redirect('/sacontrol/show')->with('success','Complaint Deleted');
    }
}
