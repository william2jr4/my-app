<?php

namespace App\Http\Controllers;

use App\Models\classgroup;
use App\Models\Classgroup as ModelsClassgroup;
use App\Models\Classroom;
use App\Models\Schedule;
use App\Models\Squad;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Dashboard Admin";
        return view('pages.admin.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexFile()
    {
        $title = "Jadwal Kelas";
        $scheduleFile = Schedule::all();

        return view('pages.admin.schedule', compact('title', 'scheduleFile'));
    }
    public function insertFile(Request $request)
    {
        // dd($request);
        $request->validate([
            'file' => 'required|mimes:pdf, xlsx, csv, xls|max:1024'
         ]);

         $request->file('file')->storeAs('files', $request->file('file')->getClientOriginalName());
        //  $data->save();
        //  dd($data);
        Schedule::create([
            'name' => $request->file('file')->getClientOriginalName()
        ]);
         return redirect()->back()->with('success', 'Selamat data berhasil disimpan');
    }

    public function download($files){
        //PDF file is stored under project/public/download/info.pdf
        $file_path = public_path('storage/files/'. $files);
        // dd($file_path);
        return response()->download( $file_path);
    }

}
