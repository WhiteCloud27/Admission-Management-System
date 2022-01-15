<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StAdmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('admin.form', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creates(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'examroll' => $request->examRoll,
            'fathersname' => $request->fathersName,
            'mothersname' => $request->mothersName,
            'unit' => $request->unit,

        ]);
        return redirect(route('index'))->with('status', 'Data added succesfully.');
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
        $student = DB::table('students')->find($id);
        return view('admin.editform', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('students')->where('id', $id)->update([
            'name' => $request->name,
            'examroll' => $request->examRoll,
            'fathersname' => $request->fathersName,
            'mothersname' => $request->mothersName,
            'unit' => $request->unit,
        ]);
        return redirect(route('index'))->with('status', 'Data updated succesfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();

        return redirect(route('index'))->with('status', 'Data deleted succesfully.');

    }


    // Admit  part
    public function pdfView($id)
    {
        $students = DB::table('students')->where ('id', $id)->get();
        return view('admit', ['students' => $students]);
        
    }
    public function downloadView()
    {
        return view('admitdownload');
        
    }
    // public function downloadView($id)
    // {
    //     $student = DB::table('students')->find($id);
    //     return view('admitdownload', ['student' => $student]);
    // }


}
