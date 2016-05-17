<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivedPlace extends Model
{
    protected $fillable = ['lived_place', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
