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
            $var = new MathStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:math_stu_applies,roll|required',
            ]);
            Storage::append('application/mathapp.log', $string);
       }
       elseif(strcmp($faculty, "arts") == 0)
       {
            $var = new ArtStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:art_stu_applies,roll|required',
            ]);
            Storage::append('application/artapp.log', $string);
       }
       elseif(strcmp($faculty, "social") == 0)
       {
            $var = new SocialStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:social_stu_applies,roll|required',
            ]);
            Storage::append('application/socialapp.log', $string);
       }
       elseif(strcmp($faculty, "bio") == 0)
       {
            $var = new BioStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:bio_stu_applies,roll|required',
            ]);
            Storage::append('application/bioapp.log', $string);
       }
       elseif(strcmp($faculty, "busi") == 0)
       {
            $var = new BusinStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:busin_stu_applies,roll|required',
            ]);
            Storage::append('application/busiapp.log', $string);
       }
       elseif(strcmp($faculty, "law") == 0)
       {
            $var = new LawStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:law_stu_applies,roll|required',
            ]);
            Storage::append('application/lawapp.log', $string);
       }
       else
       {
            $var = new InsStuApply;
            $var -> roll = $request -> roll;
            $validated = $request -> validate([
            'roll' => 'exists:ins_stu_applies,roll|required',
            ]);
            Storage::append('application/insapp.log', $string);
       }

    }
}
