<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhyChooseUsUsController extends Controller
{
    public function index(){
        return view('backend.WhyChooseUs.Add-WhyChooseUs');
    }

    public function AddChoose(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['question_1']=$request->question_1;
        $data['answer_1']=$request->answer_1;
        $data['question_2']=$request->question_2;
        $data['answer_2']=$request->answer_2;
        $data['question_3']=$request->question_3;
        $data['answer_3']=$request->answer_3;
        $data['question_4']=$request->question_4;
        $data['answer_4']=$request->answer_4;
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
            DB::table('tbl_Why_Choose_Us')
                ->insert($data);
            return redirect('view-Why-Choose-Us');
           // return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_Why_Choose_Us')
                ->insert($data);

            return redirect('view-Why-Choose-Us');
           // return back();
        }

    }
    public function ViewWhyChooseUs(){

        $Choose=DB::table('tbl_Why_Choose_Us')->get();
        return view('backend.WhyChooseUs.WhyChooseUs-view',compact('Choose'));
    }
    public function WhyChooseUsDelete($id){
        DB::table('tbl_Why_Choose_Us')
            ->where('id',$id)
            ->delete();
        return back();
    }
    public function WhyChooseUsEdit($id){
       $Edit=DB::table('tbl_Why_Choose_Us')
            ->where('id',$id)
            ->first();
        return view('backend.WhyChooseUs.Edit-WhyChooseUs',compact('Edit'));
    }
    public function UpdateChoose(Request $request){
        $id= $request->id;
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['question_1']=$request->question_1;
        $data['answer_1']=$request->answer_1;
        $data['question_2']=$request->question_2;
        $data['answer_2']=$request->answer_2;
        $data['question_3']=$request->question_3;
        $data['answer_3']=$request->answer_3;
        $data['question_4']=$request->question_4;
        $data['answer_4']=$request->answer_4;
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
            DB::table('tbl_Why_Choose_Us')
                ->where('id',$id)
                ->update($data);
            return redirect('view-Why-Choose-Us');
            // return back();

        }else{
            $data['image']=$request->old_image;

            DB::table('tbl_Why_Choose_Us')
                ->where('id',$id)
                ->update($data);

            return redirect('view-Why-Choose-Us');
            // return back();
        }
    }
    function statusUpdate($id)
    {
        //get product status with the help of product ID
        $product = DB::table('tbl_Why_Choose_Us')
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
        DB::table('tbl_Why_Choose_Us')->where('id',$id)->update($values);

        session()->flash('msg','Product status has been updated successfully.');
        return back();
    }
}
