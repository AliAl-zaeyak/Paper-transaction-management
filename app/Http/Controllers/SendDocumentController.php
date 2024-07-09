<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orequest;
use App\Models\document;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class SendDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('requests');
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
        $oreq = Orequest::find($request->id);
        $oreq->status = $request->status;
        $oreq->save();
        $doc = document::create([
            'type'=>$request->type,
            'orequest_id'=>$request->id,
            'user_id'=>$request->user_id,
            'collagedean'=>Auth::user()->id,
            'verified_by'=>$request->verified_by
        ]);
        $not = Notification::create([
            'text'=>$request->text,
            'user_id'=>$request->user_id,
        ]);
        return view('requests');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
