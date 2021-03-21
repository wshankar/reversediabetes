<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promise_FeedBack extends Model
{
    protected $fillable = ['promiseText', 'promiseImage', 'feedbackText', 'feedbackImage', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
