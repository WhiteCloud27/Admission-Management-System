<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class StudentCont extends Controller
{
   
    public function index9()
    {
        $students = student::all();
        return view('welcome',['students'=>$students]);
    }

    public function addData9(Request $request)
    {
        $member = new student;
        $member->name=$request->name;
        $member->reg=$request->reg;
        $member->hall=$request->hall;
        $member->save();
        return redirect(route('index')); 
    }

    public function destroy9($id)
    {
        
        $data = student::find($id);
        $data->delete();
        return redirect(route('index'));
    }

    public function edit9($id)
    {   
       
          $student=DB::table('students')->find($id);
          return view('editform',['student'=>$student]);
        

    }

   
    public function update9(Request $request, $id)
    {
        $student=DB::table('students')->where('id',$id)->update([
            'name'=> $request->name,
            'reg'=> $request->reg,
            'hall'=> $request->hall,
        ]);
        return redirect(route('index'));
    }

    public function search9(Request $request)
    {
        if($request->isMethod('post'))
        {
            $reg = $request->get('reg');
            $data = student::where('reg','Like','%'. $reg. '%')->paginate(5);
        }
        return view('userDisp',compact('data'));
    }

}
