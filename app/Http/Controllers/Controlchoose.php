<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

class Controlchoose extends Controller
{
    public function choose()
    {
        return view('choosesubject');
    }
}
