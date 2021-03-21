<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','phoneNumber'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function records()
    {
        return  $this->hasMany(DailyRecord::class);
    }

    public function investigations()
    {
        return $this->hasMany(Investigation::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function doctorComments()
    {
        return $this->hasMany(DoctorComment::class);
    }
}
