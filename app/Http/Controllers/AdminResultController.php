<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Get_result;
use Illuminate\Support\Facades\DB;

class AdminResultController extends Controller
{
    //

    function setResult( Request $request) 
    {

        $result=new Get_result;
        $result->reg=$request->reg;
        $result->unit=$request->unit;
        $result->mark=$request->mark;
        $result->position=$request->position;
        $result->save();
        
    }
    function  getResult(Request $request)
    {    
       $data=DB::table('get_results')
       ->where('reg',$request->reg)
       ->where('unit',$request->unit)
       ->get();
        return view('details',['data'=>$data]);

    }
}
