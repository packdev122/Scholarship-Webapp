<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' , 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        return $this->role == 2 || $this->role == 3;
    }
    public function isSuperAdmin(){
        return $this->role == 2;
    }
    public function isNormalAdmin(){
        return $this->role == 3;
    }
    public function isJury(){
        return $this->role == 1;
    }
}
