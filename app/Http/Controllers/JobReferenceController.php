<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobReferenceController extends Controller
{
    public function index(){
        return view('backend.JobReference.add_jobreference');
    }
    public function AddReference(Request $request){
        $data=array();
        $data['company']=$request->company;
        $data['area_of_uses']=$request->area_of_uses;
        $data['products']=$request->products;
        $data['areas']=$request->areas;

     DB::table('tbl_job_reference')->insert($data);
          return redirect('view-jobreference');
    }
    public function viewJobreference(){
        $all= DB::table('tbl_job_reference')
            ->get();
        return view('backend.JobReference.view_jobreference',compact('all'));
    }
    public function Editjobreference($id){
        $all= DB::table('tbl_job_reference')
            ->where('id',$id)
            ->first();
        return view('backend.JobReference.Edit_jobreference',compact('all'));
    }
    public function updatejobreference(Request $request){
        $id=$request->id;
        $data=array();
        $data['company']=$request->company;
        $data['area_of_uses']=$request->area_of_uses;
        $data['products']=$request->products;
        $data['areas']=$request->areas;
        DB::table('tbl_job_reference')
            ->where('id',$id)
            ->update($data);
        return redirect('view-jobreference');
    }
    public function Deletejobreference($id){
        DB::table('tbl_job_reference')
            ->where('id', $id)
            ->delete();
        return back();
    }

    public function ViewUserMessage(){
        $all=DB::table('tbl_user_message')->get();
        return view('backend.UserMessage.View_User_Message',compact('all'));
    }

}
