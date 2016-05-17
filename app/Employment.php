<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = ['users_id', 'employment'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
