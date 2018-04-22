<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
  // pivot table
    public function teams()
   {
       return $this->belongsToMany('App\Team');
   }

}
