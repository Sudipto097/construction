<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SidebarController extends Controller
{
    public function index(){
        return view('backend.sidebar.all_sidebar');
    }
    public function addimage(Request $request){
        $validated = $request->validate([
            'image_1' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
            'image_2' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
            'image_3' => 'mimes:jpg,jpeg,png,JPG,PNG|max:12000',
        ]);

        $data=array();
        $data['text_1']=$request->text_1;
        $data['text_2']=$request->text_2;
        $data['text_3']=$request->text_3;
        $image_1=$request->file('image_1');
        $image_2=$request->file('image_2');
        $image_3=$request->file('image_3');

        if ($image_1 && $image_2 && $image_3) {
            $image_name_1=hexdec(uniqid());
            $image_name_2=hexdec(uniqid());
            $image_name_3=hexdec(uniqid());
            $ext_1=strtolower($image_1->getClientOriginalExtension());
            $ext_2=strtolower($image_2->getClientOriginalExtension());
            $ext_3=strtolower($image_3->getClientOriginalExtension());
            $image_full_name_1=$image_name_1.'.'.$ext_1;
            $image_full_name_2=$image_name_2.'.'.$ext_2;
            $image_full_name_3=$image_name_3.'.'.$ext_3;
            $upload_path_1='public/upload/';
            $upload_path_2='public/upload/';
            $upload_path_3='public/upload/';
            $image_url_1=$upload_path_1.$image_full_name_1;
            $image_url_2=$upload_path_2.$image_full_name_2;
            $image_url_3=$upload_path_3.$image_full_name_3;
            $success_1=$image_1->move($upload_path_1,$image_full_name_1);
            $success_2=$image_2->move($upload_path_2,$image_full_name_2);
            $success_3=$image_3->move($upload_path_3,$image_full_name_3);
            $data['image_1']=$image_url_1;
            $data['image_2']=$image_url_2;
            $data['image_3']=$image_url_3;
          //  dd($data);
            DB::table('sidebar')
                ->insert($data);
            return redirect('view-sidebar');
        }else{
            $data['image_1']=$request->old_image;
            $data['image_2']=$request->old_image;
            $data['image_3']=$request->old_image;
            DB::table('sidebar')
                ->insert($data);
            return redirect('view-sidebar');
        }
    }
    public function viewSidebar(){
        $all=DB::table('sidebar')
            ->get();

        return view('backend.sidebar.show_sidebar',compact('all'));
    }
    function statusUpdate($id)
    {
        //get product status with the help of product ID
        $product = DB::table('sidebar')
            ->select('status')
            ->where('id','=',$id)
            ->first();

        //Check user status
        if($product->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        //update product status
        $values = array('status' => $status );
        DB::table('sidebar')->where('id',$id)->update($values);

        session()->flash('msg','Product status has been updated successfully.');
        return back();
    }
    public function DeleteImage($id){
        DB::table('sidebar')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
