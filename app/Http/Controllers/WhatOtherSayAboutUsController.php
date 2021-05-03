<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhatOtherSayAboutUsController extends Controller
{
    public function index(){
        return view('backend.WHAT-OTHER-SAY-ABOUT-US.Add_WHAT_OTHER_SAY_ABOUT_US');
    }
    public function AddOTHER(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['small_text']=$request->small_text;
        $data['designation']=$request->designation;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            // unlink($request->old_image);
            DB::table('tbl_What_Other_Say_About_Us')
                ->insert($data);
           return redirect('View_What_Other_Say_About_Us');
         //    return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_What_Other_Say_About_Us')
                ->insert($data);

            return redirect('View_What_Other_Say_About_Us');
            // return back();
        }
    }
    public function ViewOTHER(){
        $other=DB::table('tbl_What_Other_Say_About_Us')->get();
        return view('backend.WHAT-OTHER-SAY-ABOUT-US.Show_WHAT_OTHER_SAY_ABOUT_US',compact('other'));
    }
    public function OtherSayDelete($id){
       DB::table('tbl_What_Other_Say_About_Us')
            ->where('id',$id)
            ->delete();
        return back();
    }
    public function OtherSayEdit($id){

        $other=DB::table('tbl_What_Other_Say_About_Us')
            ->where('id',$id)
            ->first();
        return view('backend.WHAT-OTHER-SAY-ABOUT-US.Edit_WHAT_OTHER_SAY_ABOUT_US',compact('other'));
    }
    public function updateOTHER(Request $request){
        $id=$request->id;
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['small_text']=$request->small_text;
        $data['designation']=$request->designation;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            // unlink($request->old_image);
            DB::table('tbl_What_Other_Say_About_Us')
                ->where('id',$id)
                ->update($data);
             return redirect('View_What_Other_Say_About_Us');
           // return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_What_Other_Say_About_Us')
                ->where('id',$id)
                ->update($data);

             return redirect('View_What_Other_Say_About_Us');
           // return back();
        }
    }


}
