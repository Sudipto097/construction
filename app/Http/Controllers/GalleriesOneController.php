<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleriesOneController extends Controller
{
    public function index(){
        return view('backend.Galleries-1.Add_Galleries');
    }
    public function addGalleries(Request  $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
        ]);

        $data=array();
        $data['text']=$request->text;
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
            DB::table('tbl_Galleries')
                ->insert($data);
           // return back();
            return redirect('Show_Galleries_One');

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_Galleries')
                ->insert($data);
            //return back();
            return redirect('Show_Galleries_One');
        }
    }
    public function ShowGalleriesOne(){
        $all=DB::table('tbl_Galleries')->get();
        return view('backend.Galleries-1.show_Galleries',compact('all'));
    }
    public function DeleteGalleries($id){
        DB::table('tbl_Galleries')
            ->where('id',$id)
            ->delete();
        return back();
    }
    public function GalleriesTwo(){
        return view('backend.Galleries-2.Add_Galleries');
    }
    public function GalleriesAddTwo(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
        ]);

        $data=array();
        $data['text']=$request->text;
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
            DB::table('tbl_Galleries_two')
                ->insert($data);
            // return back();
            return redirect('Show_Galleries_Two');

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_Galleries_two')
                ->insert($data);
            //return back();
            return redirect('Show_Galleries_Two');
        }
    }
    public function ShowGalleriesTwo(){
        $all=DB::table('tbl_Galleries_two')->get();
        return view('backend.Galleries-2.show_Galleries',compact('all'));
    }
    public function DeleteGalleriestwo($id){
        DB::table('tbl_Galleries_two')
            ->where('id',$id)
            ->delete();
        return back();
    }

    public function GalleriesThree(){
        return view('backend.Galleries-3.Add_Galleries');
    }
    public function GalleriesAddThree(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
        ]);

        $data=array();
        $data['text']=$request->text;
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
            DB::table('tbl_Galleries_Three')
                ->insert($data);
            // return back();
            return redirect('Show_Galleries_Three');

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_Galleries_Three')
                ->insert($data);
            //return back();
            return redirect('Show_Galleries_Three');
        }
    }
    public function ShowGalleriesThree(){
        $all=DB::table('tbl_Galleries_Three')->get();
        return view('backend.Galleries-3.show_Galleries',compact('all'));
    }
    public function DeleteGalleriesThree($id){
        DB::table('tbl_Galleries_Three')
            ->where('id',$id)
            ->delete();
        return back();
    }
}
