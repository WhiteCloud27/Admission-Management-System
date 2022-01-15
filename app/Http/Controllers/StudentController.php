<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Member;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $req)
    {
        //
        $member = new Member;
        $member->firstName=$req->firstName;
        $member->lastName=$req->lastName;
        $member->fatherName=$req->fatherName;
        $member->motherName=$req->motherName;
        $member->dateofBirth=$req->dateofBirth;
        $member->gender=$req->gender;

        $member->hscYear=$req->hscYear;
        $member->hscGpa=$req->hscGpa;
        $member->hscBoard=$req->hscBoard;
        $member->hscReg=$req->hscReg;
        $member->hscRoll=$req->hscRoll;

        $member->sscYear=$req->sscYear;
        $member->sscGpa=$req->sscGpa;
        $member->sscBoard=$req->sscBoard;
        $member->sscReg=$req->sscReg;
        $member->sscRoll=$req->sscRoll;

        $member->presentVillage=$req->presentVillage;
        $member->presentUnion=$req->presentUnion;
        $member->presentPostOffice=$req->presentPostOffice;
        $member->presentThana=$req->presentThana;
        $member->presentDistrict=$req->presentDistrict;

        $member->permanentVillage=$req->permanentVillage;
        $member->permanentUnion=$req->permanentUnion;
        $member->permanentPostOffice=$req->permanentPostOffice;
        $member->permanentThana=$req->permanentThana;
        $member->permanentDistrict=$req->permanentDistrict;

        $member->unit=$req->unit;
        if($req->hasfile('profileImage'))
        {
            $file=$req->file('profileImage');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/students/',$filename);
            $member->profileImage=$filename;
           // $req->profileImage=$filename;

        }
        //$member->profileImage=$req->profileImage;
        //$req->profileImage->store('Profile');

        //$member->signatureImage=$req->signatureImage;
        //$req->signatureImage->store('Profile');

        if($req->hasfile('signatureImage'))
        {
            $file=$req->file('signatureImage');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/aplicants/',$filename);
            $member->signatureImage=$filename;
            //$req->signatureImage=$filename;
        }

        $member->email=$req->email;
        $member->phoneNo=$req->phoneNo;
        $member->password=$req->password;
        if($member->hscReg==$member->sscReg)
        {
           $member->save(); 
         return view('information')->with('req',$member);

       }
       else if($member->hscReg!=$member->sscReg)
       {
        return view('error');
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

}