<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

/**
 * Control subject choice form
 * prevent from multiple apply
 */

class ControlSubmit extends Controller
{
    public function submit(Request $request)
    {
        // choosesubject form validation
        $subjects = null;
        if(strcmp($request -> {'faculty'},"Faculty of Mathematical & Physical Sciences") == 0)
        {
            $validated = $request -> validate([
            'fname' => 'exists:mathstudents,fname|required|string|max:100',
            'lname' => 'exists:mathstudents,lname|required|string|max:100',
            'roll' => 'exists:mathstudents,roll|unique:math_stu_applies,roll|required',
            'mail' => 'required|max:35|email',
            'phoneNum' => 'required|min:11|max:11',
            'faculty' => 'required',
            ]);
            $subjects = DB::table('mathsubjects')
            ->select('name')
            ->get();
        }
        elseif(strcmp($request -> {'faculty'},"Faculty of Arts & Humanities") == 0) 
        {
            $validated = $request -> validate([
            'fname' => 'exists:artstudents,fname|required|string|max:55',
            'lname' => 'exists:artstudents,lname|required|string|max:55',
            'roll' => 'exists:artstudents,roll|unique:art_stu_applies,roll|required',
            'mail' => 'required|max:35|email',
            'phoneNum' => 'required|min:11|max:11',
            'faculty' => 'required',
            ]);
            $subjects = DB::table('artsubjects')
            ->select('name')
            ->get();
        }
        elseif(strcmp($request -> {'faculty'},"Faculty of Social Sciences") == 0) 
        {
            $validated = $request -> validate([
            'fname' => 'exists:socialstudents,fname|required|string|max:55',
            'lname' => 'exists:socialstudents,lname|required|string|max:55',
            'roll' => 'exists:socialstudents,roll|unique:social_stu_applies,roll|required',
            'mail' => 'required|max:35|email',
            'phoneNum' => 'required|min:11|max:11',
            'faculty' => 'required',
            ]);
            $subjects = DB::table('socialsubjects')
            ->select('name')
            ->get();
        }
        elseif(strcmp($request -> {'faculty'},"Faculty of Biological Sciences") == 0) 
        {
            $validated = $request -> validate([
            'fname' => 'exists:biostudents,fname|required|string|max:55',
            'lname' => 'exists:biostudents,lname|required|string|max:55',
            'roll' => 'exists:biostudents,roll|unique:bio_stu_applies,roll|required',
            'mail' => 'required|max:35|email',
            'phoneNum' => 'required|min:11|max:11',
            'faculty' => 'required',
            ]);
            $subjects = DB::table('biosubjects')
            ->select('name')
            ->get();
        }
        elseif(strcmp($request -> {'faculty'},"Faculty of Business Studies") == 0) 
        {
           $validated = $request -> validate([
           'fname' => 'exists:businessstudents,fname|required|string|max:55',
           'lname' => 'exists:businessstudents,lname|required|string|max:55',
           'roll' => 'exists:businessstudents,roll|unique:busin_stu_applies,roll|required',
           'mail' => 'required|max:35|email',
           'phoneNum' => 'required|min:11|max:11',
           'faculty' => 'required',
           ]);
           $subjects = DB::table('businesssubjects')
            ->select('name')
            ->get();
         }
        elseif(strcmp($request -> {'faculty'},"Faculty of Law") == 0) 
        {
           $validated = $request -> validate([
           'fname' => 'exists:lawstudents,fname|required|string|max:55',
           'lname' => 'exists:lawstudents,lname|required|string|max:55',
           'roll' => 'exists:lawstudents,roll|unique:law_stu_applies,roll|required',
           'mail' => 'required|max:35|email',
           'phoneNum' => 'required|min:11|max:11',
           'faculty' => 'required',
           ]);
           $subjects = DB::table('lawsubjects')
            ->select('name')
            ->get();
       }
        else 
        {
            $validated = $request -> validate([
            'fname' => 'exists:institutestudents,fname|required|string|max:100',
            'lname' => 'exists:institutestudents,lname|required|string|max:100',
            'roll' => 'exists:institutestudents,roll|unique:ins_stu_applies,roll|required',
            'mail' => 'required|max:35|email',
            'phoneNum' => 'required|min:11|max:11',
            'faculty' => 'required',
            ]);
            $subjects = DB::table('institutesubjects')
            ->select('name')
            ->get();
        }
        return view('/subjectlist/subjectlist',['subject' => $subjects, 'roll' => $request -> {'roll'}, 
            "faculty" => $request -> {'faculty'}]);
    }
}
