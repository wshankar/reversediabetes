<?php

namespace App\Http\Controllers;

use App\UserFeedback;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function createFeedback(Request $request)
    {
        return view('feedback.createFeedback');
    }

    public function storeFeedback(Request $request)
    {
                if($request->hasFile('feedbackImage')){
                    $uploadedImage = $request->file('feedbackImage');
                    $imageName = time().'.'.$uploadedImage->getClientOriginalExtension();
                    $uploadedImage->move(public_path('/feedbacks/'),$imageName);
                }
                
                $promise = UserFeedback::create([
                    'feedbackText' => $request['feedbackText'],
                    'feedbackImage' => '/feedbacks/' . $imageName,
                    'user_id' => $request['user_id'],

                ]);

                return redirect('/home')->with('success', 'FeedBack Added Successfully, Welcome!');
            }
    
}
