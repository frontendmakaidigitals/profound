<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floorplan extends Model
{
    use HasFactory;
     
   public function categorys(){
        return $this->belongsToMany('App\Models\Category');
    }

}
