<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $med = auth()->user()->medications()->latest()->first();
        $comment = auth()->user()->doctorComments()->latest()->first();
        $records = auth()->user()->records()->take(5)->latest()->get();
        $nextTest = auth()->user()->investigations()->latest()->first();
        return view('home',compact('records', 'nextTest', 'comment','med'));
    }
}
