<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.sendproblem');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $problems = Problem::get();
        return view('profile.problems')->with(['problems'=>$problems]);

    }
    public function accept(Request $request)
    {
      $problems = Problem::find($request->id);
      $problems->status = $request->status;
      $problems->save();
      $problems = Problem::get();
      return view('profile.problems')->with(['problems'=>$problems]);;
    }
    public function send(Request $request)
    {
      $problems = Problem::find($request->id);
      $problems->status = $request->status;
      $problems->reply = $request->reply;
      $problems->save();
      $notifications = Notification::create([
        'text'=>$request->text,
        'user_id'=>$request->user_id
      ]);
      $problems = Problem::get();
      return view('profile.problems')->with(['problems'=>$problems]);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $problem = Problem::create([
            'user_id'=>Auth::user()->id,
            'problem'=>$request->problem
        ]);
        return view('Main');
    }

    /**
     * Display the specified resource.
     */
    public function show(Problem $problem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Problem $problem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Problem $problem)
    {
        //
    }
}
