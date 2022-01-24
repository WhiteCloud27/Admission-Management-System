<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\MathStuApply;
use App\Models\ArtStuApply;
use App\Models\SocialStuApply;
use App\Models\BioStuApply;
use App\Models\BusinStuApply;
use App\Models\LawStuApply;
use App\Models\InsStuApply;


class ConfirmSubmission extends Controller
{
    public function done(Request $request, $faculty)
    {
       $string = implode(",",$request -> all());

       if(strcmp($faculty, "Faculty of Mathematical & Physical Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/mathapplicant.log', $string);
             $var = new MathStuApply;
             $var -> roll = $request -> roll;
             $var -> done = 0;
             $var -> save();
       }
       elseif(strcmp($faculty, "Faculty of Arts & Humanities") == 0)
       {
            Storage::append('subjectchooseapplicant/artapplicant.log', $string);
             $var = new ArtStuApply;
             $var -> roll = $request -> roll;
             $var -> done = 0;
             $var -> save();
       }
       elseif(strcmp($faculty, "Faculty of Social Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/socialapplicant.log', $string);
             $var = new SocialStuApply;
             $var -> roll = $request -> roll;
             $var -> done = 0;
             $var -> save();
       }
       elseif(strcmp($faculty, "Faculty of Biological Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/bioapplicant.log', $string);
             $var = new BioStuApply;
             $var -> roll = $request -> roll;
             $var -> done = 0;
             $var -> save();
       }
       elseif(strcmp($faculty, "Faculty of Business Studies") == 0)
       {
            Storage::append('subjectchooseapplicant/businessapplicant.log', $string);
            $var = new BusinStuApply;
            $var -> roll = $request -> roll;
            $var -> done = 0;
            $var -> save();
       }
       elseif(strcmp($faculty, "Faculty of Law") == 0)
       {
            Storage::append('subjectchooseapplicant/lawapplicant.log', $string);
            $var = new LawStuApply;
            $var -> roll = $request -> roll;
            $var -> done = 0;
            $var -> save();
       }
       else
       {
            Storage::append('subjectchooseapplicant/instituteapplicant.log', $string);
            $var = new InsStuApply;
            $var -> roll = $request -> roll;
            $var -> done = 0;
            $var -> save();
       }

       return view('success/success');
         
    }
}