<?php

namespace App\Http\Controllers;

use App\Investigation;
use Illuminate\Http\Request;

class InvestigationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = auth()->user()->investigations()->paginate(5);
        return view('inv.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'testDate' => 'required',
        //     'Cpeptide' => 'required',
        //     'hba1c' => 'required',
        //     'cholesterol' => 'required',
        //     'hdl' => 'required',
        //     'ldl' => 'required',
        //     'tg' => 'required',
        //     'ratio' => 'required',
        //     'cr' => 'required',
        //     'tsh' => 'required'
        // ]);

        $patient= Investigation::create([
            'testDate' => $request['testDate'],
            'Cpeptide' => $request['Cpeptide'],
            'hba1c' => $request['hba1c'],
            'cholesterol' => $request['cholesterol'],
            'hdl' => $request['hdl'],
            'ldl' => $request['ldl'],
            'tg' => $request['tg'],
            'ratio' => $request['ratio'],
            'cr' => $request['cr'],
            'tsh' => $request['tsh'],
            'nextTest' => $request['nextTest'],
            'user_id' => $request['user_id']
        ]);

        return redirect('/')->with('success', 'Record Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Investigation::find($id);
        return view('inv.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient= Investigation::where('id', $id)->update([
            'testDate' => $request['testDate'],
            'Cpeptide' => $request['Cpeptide'],
            'hba1c' => $request['hba1c'],
            'cholesterol' => $request['cholesterol'],
            'hdl' => $request['hdl'],
            'ldl' => $request['ldl'],
            'tg' => $request['tg'],
            'ratio' => $request['ratio'],
            'cr' => $request['cr'],
            'tsh' => $request['tsh'],
            'nextTest' => $request['nextTest'],
        ]);

        return redirect('/')->with('success', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
