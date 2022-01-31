<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Models\MathStuApply;
use App\Models\ArtStuApply;
use App\Models\SocialStuApply;
use App\Models\BioStuApply;
use App\Models\BusinStuApply;
use App\Models\LawStuApply;
use App\Models\InsStuApply;

class GetAdmit extends Controller
{
    public function admit(Request $request)
    {
        $faculty = $request -> faculty;
        $string = implode(",",$request->all());
       if(strcmp($faculty, "maths") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:math_stu_applies,roll|required',
            ]);
            $var = MathStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/mathapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       elseif(strcmp($faculty, "arts") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:art_stu_applies,roll|required',
            ]);
            $var = ArtStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/artapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       elseif(strcmp($faculty, "social") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:social_stu_applies,roll|required',
            ]);
            $var = SocialStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/socialapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       elseif(strcmp($faculty, "bio") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:bio_stu_applies,roll|required',
            ]);
            $var = BioStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/bioapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       elseif(strcmp($faculty, "busi") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:busin_stu_applies,roll|required',
            ]);
            $var = BusinStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/busiapp.log', $string);
            }
             else
            {
               return view('getadmit.fail');
            }
       }
       elseif(strcmp($faculty, "law") == 0)
       {
            $validated = $request -> validate([
            'roll' => 'exists:law_stu_applies,roll|required',
            ]);
            $var = LawStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/lawapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       else
       {
            $validated = $request -> validate([
            'roll' => 'exists:ins_stu_applies,roll|required',
            ]);
            $var = InsStuApply::firstWhere('roll', $request -> roll);
            if($var -> done == 0)
            {
               $var -> done = 1;
               $var -> save();
               Storage::append('application/insapp.log', $string);
            }
            else
            {
               return view('getadmit.fail');
            }
       }
       return view('success/success');
    }
}
