<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    use HasFactory;

    public function CommunityProperty(){
        return $this->hasOne('App\Models\Property','communities','id');
    }
}
