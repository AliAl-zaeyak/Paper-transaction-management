<?php

namespace App\Http\Controllers;

use App\Models\AddField;
use App\Models\AddReqest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request = AddReqest::find($request->id);
        $addfield = AddField::all()->where('add_reqest_id',$request->id)->first();
        //dd($addfield);
      return view('NewRequest')->with(['addfield'=>$addfield,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addField = AddField::create([
            'user_id'=>Auth::user()->id,
            'add_reqest_id'=>Auth::user()->AddReqest()->latest()->first()->id,
            'field_1'=>$request->field_1,
            'field_2'=>$request->field_2,
            'field_3'=>$request->field_3,
            'field_4'=>$request->field_4,
            'field_5'=>$request->field_5,
            'field_6'=>$request->field_6,
            'field_7'=>$request->field_7,
            'field_8'=>$request->field_8,
            'field_9'=>$request->field_9,
            'field_10'=>$request->field_10
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AddField $addField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AddField $addField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AddField $addField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AddField $addField)
    {
        //
    }
}
