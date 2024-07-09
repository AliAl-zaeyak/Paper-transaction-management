<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Year;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Year::all();
        return view('requestofcollagelife',compact('years'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $students = Student::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'fathername' => $request->fathername,
            'mothername' => $request->mothername,
            'born' => $request->born,
            'governorate'=>$request->governorate,
            'nationality' => $request->nationality,
            'universitynumber'=>$request->universitynumber,
            'natunalnumber'=>$request->natunalnumber,
            'dateoficard'=>$request->dateoficard,
            'phonenumber'=>$request->phonenumber,
            'graduationdate'=>$request->graduationdate,
            'differenatiation'=>$request->differenatiation,
            'specilization' => $request->specilization,
            'year' => $request->year,
            'status' => $request->status,
        ]);
        return view('Main');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
      return view('inputpersonalinformation');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
