<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{

    protected $fillable = ['users_id', 'interest'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
