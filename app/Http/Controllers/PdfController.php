<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfView()
    {
        return view('admit');
    }
    public function pdfGenereation()
    {
        $pdf = PDF::loadView('admit',  );
        return $pdf->download('admitcard.pdf');
    }
}
