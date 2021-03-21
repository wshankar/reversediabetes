<?php

namespace App\Http\Controllers;

use App\UserPromise;
use Illuminate\Http\Request;

class UserPromiseController extends Controller
{
    public function createPromise()
    {
        return view('feedback.createPromise');
    }

    public function storePromise(Request $request)
    {

        if($request->hasFile('promiseImage')){
            $uploadedImage = $request->file('promiseImage');
            $imageName = time().'.'.$uploadedImage->getClientOriginalExtension();
            $uploadedImage->move(public_path('/promises/'), $imageName);
        }
        
        $promise = UserPromise::create([
            'promiseText' => $request['promiseText'],
            'promiseImage' => '/promises/' . $imageName,
            'user_id' => $request['user_id'],

        ]);

        return redirect('/home')->with('success', 'Promise Added Successfully, Welcome!');
    }
}
