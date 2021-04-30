<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function index(){
        return view('backend.ABOUT-US.about-us');
    }
    public function AddAbout(Request $request){
        $data=array();
        $data['about']=$request->about;

        DB::table('tbl_about')->insert($data);
        return redirect('About-view');
    }
    public function Aboutview(){
        $about=DB::table('tbl_about')->get();
        return view('backend.ABOUT-US.about-view',compact('about'));
    }
    public function Deletejobreference($id){
        DB::table('tbl_about')
            ->where('id', $id)
            ->delete();
        return back();
    }

    public function EditAbout($id){
        $all= DB::table('tbl_about')
            ->where('id',$id)
            ->first();
        return view('backend.ABOUT-US.about-edit',compact('all'));
    }
    public function updateAbout(Request $request){
        $id=$request->id;
        $data=array();
        $data['about']=$request->about;

        DB::table('tbl_about')
            ->where('id',$id)
            ->update($data);
        return redirect('About-view');
    }

//    function statusUpdate($id)
//    {
//        //get product status with the help of product ID
//        $product = DB::table('tbl_job_reference')
//            ->select('status')
//            ->where('id','=',$id)
//            ->first();
//
//        //Check user status
//        if($product->status == '1'){
//            $status = '0';
//        }else{
//            $status = '1';
//        }
//        //update product status
//        $values = array('status' => $status );
//        DB::table('tbl_job_reference')->where('id',$id)->update($values);
//
//        session()->flash('msg','Product status has been updated successfully.');
//        return back();
//    }
}
