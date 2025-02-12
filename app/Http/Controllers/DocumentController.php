<?php

namespace App\Http\Controllers;

use App\Models\document;
use App\Models\Year;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function collagelife()
    {
        $year = Year::all();
        return view('profile.collagelifedocument',compact('year'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(document $document)
    {
        $document = document::all();
        return view('profile.collagelifedocument',compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(document $document)
    {
        //
    }
}
