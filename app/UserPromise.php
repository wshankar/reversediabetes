<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPromise extends Model
{
    protected $fillable = ['promiseText', 'promiseImage', 'user_id'];
    
}
