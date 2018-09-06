<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    use Notifiable;
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts(){
        return $this -> hasMany('App\Post');
    }

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }
    
}

