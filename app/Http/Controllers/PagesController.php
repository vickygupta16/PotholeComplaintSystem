<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Complaint; 
use App\User;
use DB;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function view()
    {
        $comp = Complaint::all();
        return view('pages.view')->with('comp',$comp);
    }
    public function reports()
    {
        $comp1 = DB::table('complaints')
        ->select('complaints.*')
        ->where('comp_status','=','Finished Work')
        ->get(); 
        $comp2 = DB::table('complaints')
        ->select('complaints.*')
        ->where('comp_status','!=','Finished Work')
        ->get();
        return view('pages.reports',['comp1'=>$comp1])->with('comp2',$comp2);
    }
}
