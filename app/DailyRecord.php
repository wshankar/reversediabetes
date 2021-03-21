<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyRecord extends Model
{
    protected $fillable = [
        'recDate','fbs', 'breakfast', 
        'nuts', 'lunch', 'rbs', 
        'fruits', 'dinner','remarks','bodyWeight', 'bloodPressure', 'heartRate', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
