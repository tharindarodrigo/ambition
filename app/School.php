<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = [ 'school', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
