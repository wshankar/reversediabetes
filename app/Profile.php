<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['dmNumber', 'dob', 'address', 'diabetesAge', 'favFood', 'profile_pic', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
