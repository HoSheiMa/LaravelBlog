<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // create relation with the user
    public function users() {
        return $this->hasMany('App\User');
    }
}
