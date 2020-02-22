<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Complaint; 
use App\User;
use App\Ward;
use App\SubAdmin;
use App\Status;
use DB;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('created_at','desc');
        //$posts = Post::all();
        //return view('posts.index')->with('posts',$posts);
        $users = User::all();
        $subadmin = SubAdmin::all();
        return view('posts.mainpage',['users'=>$users])->with('subadmin',$subadmin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp = Complaint::all();
        $wards = Ward::all();
        return view('posts.create',['wards'=>$wards])->with('comp',$comp);
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
            'nop'=>'required',
            'address'=>'required',
            'wardname'=>'required'
        ]);
         //Create Post
         $cmp = new Complaint;
         $cmp->name = $request->input('name');
         $cmp->nop = $request->input('nop');
         $cmp->address = $request->input('address');
         $cmp->wardname = $request->input('wardname');
         $cmp->save();
         return redirect('posts/create');
         //return redirect('/posts')->with('success','Complaint Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ob = User::find($id);
        $sql1 = DB::table('users')
        ->select('name')
        ->where('id',$id)->value('name');
        $sql2 = DB::table('complaints')
        ->select('wardname')
        ->where('name',$sql1)->value('wardname');
        $sql = DB::table('complaints')
        ->select('complaints.*')
        ->where('wardname','=',$sql2)
        ->get();
        return view('posts.regcomnb')->with('sql',$sql);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ob1 = DB::table('users')
        ->select('name')
        ->where('id',$id)->value('name');
        $mcomp = DB::table('complaints')
        ->select('complaints.*')
        ->where('name',$ob1)
        ->get();
        return view('posts.mycomp')->with('mcomp',$mcomp);
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
        $comp = Complaint::find($id);
        $comp->response = $request->input('response');
        $comp->save();
        return view('posts.mycomp')->with('comp',$comp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmp = Complaint::find($id);
        $cmp->delete();
        return redirect('/view')->with('success','Complaint Deleted');
    }
}