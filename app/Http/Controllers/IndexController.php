<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class IndexController extends Controller
{
    public function home(){

        return view('frontend.all');
    }
    public function index(){
       return view('frontend.Galleries');
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