<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConfirmSubmission extends Controller
{
    public function done(Request $request, $faculty)
    {
       $string = implode(",",$request -> all());

       if(strcmp($faculty, "Faculty of Mathematical & Physical Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/mathapplicant.log', $string);
            DB::table('mathstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       elseif(strcmp($faculty, "Faculty of Arts & Humanities") == 0)
       {
            Storage::append('subjectchooseapplicant/artapplicant.log', $string);
            DB::table('artstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       elseif(strcmp($faculty, "Faculty of Social Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/socialapplicant.log', $string);
            DB::table('socialstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       elseif(strcmp($faculty, "Faculty of Biological Sciences") == 0)
       {
            Storage::append('subjectchooseapplicant/bioapplicant.log', $string);
            DB::table('biostuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       elseif(strcmp($faculty, "Faculty of Business Studies") == 0)
       {
            Storage::append('subjectchooseapplicant/businessapplicant.log', $string);
            DB::table('businstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       elseif(strcmp($faculty, "Faculty of Law") == 0)
       {
            Storage::append('subjectchooseapplicant/lawapplicant.log', $string);
            DB::table('lawstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }
       else
       {
            Storage::append('subjectchooseapplicant/instituteapplicant.log', $string);
            DB::table('insstuapply') -> insert
            ([
               'roll' =>  $request -> {'roll'},
               'created_at' => Carbon::now() -> toDateTimeString(),
               'updated_at' => Carbon::now() -> toDateTimeString()
            ]);
       }

       return view('success/success');
         
    }
}
