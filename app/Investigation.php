<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $fillable = ['testDate', 'Cpeptide', 'hba1c', 'cholesterol', 'hdl', 'ldl', 'tg', 'cr', 'ratio', 'tsh','nextTest', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
