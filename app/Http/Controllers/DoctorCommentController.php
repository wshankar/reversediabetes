<?php

namespace App\Http\Controllers;

use App\DoctorComment;
use App\User;
use Illuminate\Http\Request;

class DoctorCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Protecting routes with Policy

        $users = User::all(['id','name']);
        return view('doctor.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = DoctorComment::create([
              'user_id' => $request['user_id'],
              'doctorComment' => $request['doctorComment']
        ]);

        return back()->with('success', 'Commented Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorComment  $doctorComment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorComment $doctorComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorComment  $doctorComment
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorComment $doctorComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorComment  $doctorComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorComment $doctorComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorComment  $doctorComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorComment $doctorComment)
    {
        //
    }
}
