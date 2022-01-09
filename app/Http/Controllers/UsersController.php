<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UsersController extends Controller
{
    
    function getData(Request $req)
    {
        $member=new Member;
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
        $member->profileImage=$req->profileImage;
        $req->profileImage->store('Profile');

        $member->signatureImage=$req->signatureImage;
        $req->signatureImage->store('Profile');

        $member->email=$req->email;
        $member->phoneNo=$req->phoneNo;
        $member->password=$req->password;

        $member->save();
      
    }
}
