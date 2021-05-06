<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class IndexController extends Controller
{
    public function home(){
        $Other=DB::table('tbl_What_Other_Say_About_Us')->get();

        return view('frontend.all',compact('Other'));
    }
    public function index(){
        $Galleries_1=DB::table('tbl_Galleries')->get();
        $Galleries_2=DB::table('tbl_Galleries_two')->get();
       return view('frontend.Galleries',compact('Galleries_1','Galleries_2'));
    }
    public function Contact(){
        return view('frontend.Contact');
    }
    public function JobReference(){
        $all= DB::table('tbl_job_reference')
            ->get();
        return view('frontend.JobReference',compact('all'));
    }
    public function ABOUTUS(){
        $about=DB::table('tbl_about')->get();
        return view('frontend.ABOUTUS',compact("about"));
    }
}
