<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\GroupClass;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public static function findAllLecturers()
    {

        return User::whereHas('role', function($q) {
            $q->where(['position'  => "Lecturer"]);
        })->get();
    }

    public static function findLecturers()
    {
        return Role::where('position', 'Lecturer')->first()->users;
    }

    public function is($roleName)
    {
        if($this->role == $roleName) {
            return true;
        }

        return false;
    }

    public function classes()
    {
        return $this->hasMany(GroupClass::class, 'lecturer_id');
    }
}
