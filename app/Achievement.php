<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{

    protected $fillable = [
        'achievement',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
