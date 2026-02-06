<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    
    public function properties(){
        return $this->hasMany('App\Models\Property','developer','id')->where('status','2')->take(10);
    }
    
    public function completed(){
        return $this->hasMany('App\Models\Property','developer','id')->where('status','6')->take(10);
    }
}
