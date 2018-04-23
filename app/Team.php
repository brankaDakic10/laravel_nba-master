<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){

        return $this->hasMany('App\Player');
    }
   
    
    public function comments(){

        return $this->hasMany('App\Comment');
    }
   
    // pivot table
    public function news()
    {
        return $this->belongsToMany('App\News');
    }
 
    ////// team name
    public function getRouteKeyName()
    {
        return 'name';
    }

}
