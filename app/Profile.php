<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //handles relationship where a User has a Profile linked by user_id
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
