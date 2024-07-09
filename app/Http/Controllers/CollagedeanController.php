<?php

namespace App\Http\Controllers;

use App\Models\collagedean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollagedeanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $collagedean = collagedean::create([
           'name'=>$request->name,
           'user_id'=>Auth::user()->id
        ]);
        return view('Main');
    }

    /**
     * Display the specified resource.
     */
    public function show(collagedean $collagedean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(collagedean $collagedean)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, collagedean $collagedean)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(collagedean $collagedean)
    {
        //
    }
}
