<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $fillable = ['first_name','last_name','email','password'];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function documents()
    {
        return $this->hasMany('App\Document');
    }
    
}
