<?php

namespace App\Http\Controllers;

use App\DailyRecord;
use DateTime;
use Illuminate\Http\Request;

class DailyRecordController extends Controller
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
            $records = auth()->user()->records()->latest()->paginate(7);
            return view('rec.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'recDate' => 'required',
            'fbs' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'breakfast' => 'required|',
            'nuts' => 'required',
            'lunch' => 'required',
            'rbs' => 'required',
            'fruits' => 'required',
            'dinner' => 'required'
        ]);

        $record= DailyRecord::create([
            'recDate' => $request['recDate'],
            'fbs' => $request['fbs'],
            'breakfast' => $request['breakfast'],
            'nuts' => $request['nuts'],
            'lunch' => $request['lunch'],
            'rbs' => $request['rbs'],
            'fruits' => $request['fruits'],
            'dinner' => $request['dinner'],
            'remarks' => $request['remarks'],
            'bodyWeight' => $request['bodyWeight'],
            'bloodPressure' => $request['bloodPressure'],
            'heartRate' => $request['heartRate'],
            'user_id' => $request['user_id']
        ]);

        return redirect('/rec')->with('success', 'Record Added');
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
        $record = DailyRecord::find($id);
        return view('rec.edit', compact('record'));
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
        DailyRecord::where('id', $id)->update([
            'recDate' => $request['recDate'],
            'fbs' => $request['fbs'],
            'breakfast' => $request['breakfast'],
            'nuts' => $request['nuts'],
            'lunch' => $request['lunch'],
            'rbs' => $request['rbs'],
            'fruits' => $request['fruits'],
            'dinner' => $request['dinner'],
            'remarks' => $request['remarks']
        ]);

        return redirect('/rec')->with('success', 'Record Updated');
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
