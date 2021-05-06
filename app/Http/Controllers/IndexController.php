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
        $Galleries_3=DB::table('tbl_Galleries_Three')->get();
        $Galleries_4=DB::table('tbl_Galleries_Four')->get();
        $Galleries_5=DB::table('tbl_Galleries_five')->get();
       return view('frontend.Galleries',compact('Galleries_1','Galleries_2','Galleries_3','Galleries_4','Galleries_5'));
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
    public function usermessage(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['message']=$request->message;
        DB::table('tbl_user_message')
            ->insert($data);
        return back();
     //   return redirect('view-Why-Choose-Us');

    }
}
