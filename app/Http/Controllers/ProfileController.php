<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
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
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'dmNumber' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'diabetesAge' => 'required',
            'favFood' => 'required',
            'profile_pic' => 'required|image',
        ]);

        if($request->hasFile('profile_pic')){
            $userProfile = $request->file('profile_pic');
            $imageName = time().'.'.$userProfile->getClientOriginalExtension();

            $image_resize = Image::make($userProfile->getRealPath());              
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('/profile_pic/'.$imageName));
        }
        

        $profile = Profile::create([
            'dmNumber' => $request['dmNumber'],
            'dob' => $request['dob'],
            'address' => $request['address'],
            'diabetesAge' => $request['diabetesAge'],
            'favFood' => $request['favFood'],
            'profile_pic' => '/profile_pic/' . $imageName,
            'user_id' => $request['user_id'],
        ]);

        return redirect('/home')->with('success', 'Profile Created Successfully, Welcome!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
