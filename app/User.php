<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'is_admin'  => 'boolean'
    ];

    public function getNombres() 
    {
        return $this->apellidos . ' ' . $this->nombres;
    }

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = \Hash::needsRehash($value) ? \Hash::make($value) : $value;
    }
}
