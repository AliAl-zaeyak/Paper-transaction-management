<?php

namespace App\Http\Controllers;

use App\Models\Orequest;
use App\Models\Student;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //$orequests = DB::table('orequests')->get();
      // return view('requests',['orequests'=>$orequests]);
      return view('requests');
    }
    public function collagelife()
    {
        $year = Year::all()->where('user_id',Auth::user()->id);
        return view('requestofcollagelife',compact('year'));
    }
    public function timedocument(){
       return view('timedocument');
    }
    public function stop()
    {
        return view('stoprequest');
    }
    public function requeststatus(){
       $orequests = Orequest::all()->where('user_id',Auth::user()->id);
       return view('requeststatus')->with(['orequests'=>$orequests]);
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
        $orequest = Orequest::create([
            'type'=>$request->type,
            'user_id' => Auth::user()->id,
            'student_id' => Auth::user()->id,
            'collagedean'=>Auth::user()->id
            ]);
            return view('Main');
    }
    public function store2(Request $request)
    {
        $orequest = Orequest::create([
            'type'=>$request->type,
            ]);
            return view('Main');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orequest $orequest)
    {
        return view('requests');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orequest $orequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orequest $orequest)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orequest $orequest)
    {
        //
    }
}
