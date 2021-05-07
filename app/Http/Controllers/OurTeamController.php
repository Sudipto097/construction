<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurTeamController extends Controller
{
    public function index(){
        return view('backend.OURTEAM.Add-ourTeam');
    }
    public function ADDOurTeam(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['name']=$request->name;
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
            DB::table('tbl_our_team')
                ->insert($data);
            return redirect('View-OurTeam');
            //    return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_our_team')
                ->insert($data);

            return redirect('View-OurTeam');
            // return back();
        }
    }
    public function ViewOurTeam(){
        $other=DB::table('tbl_our_team')->get();
        return view('backend.OURTEAM.ourTeam-view',compact('other'));
    }
    public function ourDelete($id){
        DB::table('tbl_our_team')
            ->where('id',$id)
            ->delete();
        return back();
    }
    public function ourEdit($id){
        $all=DB::table('tbl_our_team')
            ->where('id',$id)
            ->first();
        return view('backend.OURTEAM.Edit-ourTeam',compact('all'));
    }
    //--------------
    public function UpdateOurTeam(Request $request){
        $id=$request->id;
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['name']=$request->name;
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
            DB::table('tbl_our_team')
                ->where('id',$id)
                ->update($data);
            return redirect('View-OurTeam');
            //    return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_our_team')
                ->where('id',$id)
                ->update($data);

            return redirect('View-OurTeam');
            // return back();
        }
    }

}
