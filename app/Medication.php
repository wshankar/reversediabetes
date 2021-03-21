<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = [ 'noMed','med1','med2','med3','med4','med5','med6','med7','med8','med10','med9','med11','med12','med13','med14','med15', 'medFree', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
