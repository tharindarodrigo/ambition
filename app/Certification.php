<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = ['users_id', 'certification'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
