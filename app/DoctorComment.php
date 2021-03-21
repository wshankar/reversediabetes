<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorComment extends Model
{
    protected $fillable = ['doctorComment', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
