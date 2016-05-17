<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = ['users_id', 'degree'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
