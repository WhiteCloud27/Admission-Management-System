<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use Illuminate\Support\Facades\DB;

class AdminSeatPlanController extends Controller
{
    function setSeatPlan( Request $request)
    {
 
        $result=new Seat;
        $result->hscRegistrationNo=$request->hscRegistrationNo;
        $result->examUnit=$request->examUnit;
        $result->institution=$request->institution;
        $result->roomNo=$request->roomNo;
        $result->examTime=$request->examTime;
        $result->save();
 
    }
    function  getSeatPlan(Request $request)
    {    
       $data=DB::table('seats')
       ->where('hscRegistrationNo',$request->hscRegistrationNo)
      ->where('examUnit',$request->examUnit)
       ->get();
        return view('userDetails',['data'=>$data]);
 
    }
}
