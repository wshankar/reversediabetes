<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    protected $fillable = ['feedbackText', 'feedbackImage', 'user_id'];
    
}
