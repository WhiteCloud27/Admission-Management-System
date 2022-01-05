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

        $member->save();
      
    }
}
