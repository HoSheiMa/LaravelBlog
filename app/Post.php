<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Relationship between post and user
    public function user() {
        // which post will belong to which user
        return $this->belongsTo('App\User');
    }


    public function categories() {
        // The post can belong to many category
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany('App\Comment');
      }
}
