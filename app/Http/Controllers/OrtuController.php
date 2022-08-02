<?php

namespace App\Http\Controllers;

use App\Models\Assestment;
use App\Models\Attendance;
use App\Models\Messenger;
use App\Models\Classgroup;
use App\Models\Ortu;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data anak saya";
        $scheduleFiles = Schedule::all();
        $absents = Attendance::where('student_id', Auth::user()->student_id)->get();
        $assestments = Assestment::where('student_id', Auth::user()->student_id)->get();
        $classgroup = Classgroup::where('student_id', Auth::user()->student_id)->first();
        $student = Student::where('id', Auth::user()->student_id)->first();
        // dd($classgroup);
        return view('pages.ortu.index', compact('title', 'absents', 'assestments', 'student', 'scheduleFiles', 'classgroup'));
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
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function show(Ortu $ortu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function edit(Ortu $ortu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ortu $ortu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ortu $ortu)
    {
        //
    }

    public function message()
    {
        $title = "Informasi";
        $messages = Messenger::where('ortu_id', Auth::user()->id)->orderBy('id','ASC')->get();
        return view('pages.ortu.messenger', compact('title', 'messages'));
    }
}
