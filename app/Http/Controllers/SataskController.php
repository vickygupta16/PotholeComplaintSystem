<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\User;
use App\Complaint;
use App\SubAdmin;
use App\Status;

class SataskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$comp = Complaint::all();
        $san = SubAdmin::all();
        //return view('saviews.show',['san'=>$san])->with('comp',$comp);
        $sql = DB::table('sub_admins')
        ->join('wards','sub_admins.w_id','=','wards.ward_id')
        ->join('complaints','wards.ward_name','=','complaints.wardname')
        ->select('complaints.*')
        ->where('sub_admins.sa_id','=','13')
        ->get();
        return view('saviews.show')->with('sql',$sql);*/
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $st = DB::table('statuses')
        ->select('statuses.*')
        ->get();
        $ob1 = DB::table('users')
        ->join('sub_admins','users.name','=','sub_admins.name')
        ->where('id',$id)->value('sa_id');
        $ob2 = DB::table('sub_admins')
        ->join('wards','sub_admins.w_id','=','wards.ward_id')
        ->where('sa_id',$ob1)->value('ward_name');
        $sql = DB::table('complaints')
        ->select('complaints.*')
        ->where('wardname',$ob2)
        ->get();
        return view('saviews.show',['st'=>$st])->with('sql',$sql);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comp = Complaint::find($id);
        $st = DB::table('statuses')
        ->select('statuses.*')
        ->get();
        return view('saviews.edit',['st'=>$st])->with('comp',$comp);
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
        $this->validate($request,[
            'name'=>'required',
            'nop'=>'required',
            'address'=>'required',
            'wardname'=>'required',
            'stat'=>'required'
        ]);

         $comp = Complaint::find($id);
         $comp->name = $request->input('name');
         $comp->nop = $request->input('nop');
         $comp->address = $request->input('address');
         $comp->wardname = $request->input('wardname');
         $comp->comp_status = $request->input('stat');
         $comp->save();

         
         $comp = Complaint::find($id);
         $st = DB::table('statuses')
         ->select('statuses.*')
         ->get();
         return view('saviews.edit',['st'=>$st])->with('comp',$comp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
