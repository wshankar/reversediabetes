<?php

namespace App\Http\Controllers;

use App\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
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
        $meds = Medication::latest()->paginate(1);
        return view('med.index', compact('meds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('med.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $med= Medication::create([
            'noMed' => $request['noMed'],
            'med1' => $request['med1'],
            'med2' => $request['med2'],
            'med3' => $request['med3'],
            'med4' => $request['med4'],
            'med5' => $request['med5'],
            'med6' => $request['med6'],
            'med6' => $request['med6'],
            'med7' => $request['med7'],
            'med8' => $request['med8'],
            'med9' => $request['med9'],
            'med10' => $request['med10'],
            'med11' => $request['med11'],
            'med12' => $request['med12'],
            'med13' => $request['med13'],
            'med14' => $request['med14'],
            'med15' => $request['med15'],
            'medFree' => $request['medFree'],
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
        $med = Medication::find($id);
        return view('med.edit', compact('med'));
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
        $med= Medication::where('id', $id)->update([
            'noMed' => $request['noMed'],
            'med1' => $request['med1'],
            'med2' => $request['med2'],
            'med3' => $request['med3'],
            'med4' => $request['med4'],
            'med5' => $request['med5'],
            'med6' => $request['med6'],
            'med6' => $request['med6'],
            'med7' => $request['med7'],
            'med8' => $request['med8'],
            'med9' => $request['med9'],
            'med10' => $request['med10'],
            'med11' => $request['med11'],
            'med12' => $request['med12'],
            'med13' => $request['med13'],
            'med14' => $request['med14'],
            'med15' => $request['med15'],
            'medFree' => $request['medFree'],
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
