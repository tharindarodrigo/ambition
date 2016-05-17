<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function achievements()
    {
        return $this->hasMany('App\Achievement');
    }

    public function educationalGoals()
    {
        return $this->hasMany('App\EducationalGoal');
    }

    public function interests()
    {
        return $this->hasMany('App\Interest');
    }

    public function languages()
    {
        return $this->hasMany('App\language');
    }

    public function livedPlaces()
    {
        return $this->hasMany('App\LivedPlace');
    }

    public function memberships()
    {
        return $this->hasMany('App\Membership');
    }

    public function professionalSkills()
    {
        return $this->hasMany('App\ProfessionalSkill');
    }

    public function schools()
    {
        return $this->hasMany('App\School');
    }

    public function employments()
    {
        return $this->hasMany('App\Employment');
    }


}
