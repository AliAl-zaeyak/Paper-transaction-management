<?php

namespace App\Http\Controllers;

use App\Models\year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.year');
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
        $year =  year::create([
            'universitynumber'=>$request->universitynumber,
            'year'=>$request->year,
            'academicyear'=>$request->academicyear,
            'firstexamsession'=>$request->firstexamsession,
            'secondexamsession'=>$request->secondexamsession,
            'thirdexamsession'=>$request->thirdexamsession,
            'note'=>$request->note,
            'status'=>$request->status,
            'registerdate'=>$request->registerdate
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(year $year)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, year $year)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(year $year)
    {
        //
    }
}
