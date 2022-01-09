<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfView()
    {
        return view('admit');
    }
    public function test()
    {
        return view('download');
    }
}
