<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Property extends Model

{

    use HasFactory;

    

    public function agent(){

        return $this->hasOne('App\Models\User','id','agent_id');

    }

    

    public function amenities(){

        return $this->belongsToMany('App\Models\Amenity');

    }

    public function accommodataions(){

        return $this->belongsToMany('App\Models\Accommodataion');

    }

    public function neighbourhoodss(){

        return $this->belongsToMany('App\Models\Neighbourhoods');

    }

    public function specifications(){

        return $this->belongsToMany('App\Models\Specification');

    }

    public function propertyBedrooms(){

        return $this->belongsToMany('App\Models\Bedroom');

    }

    public function imagegalleries(){

        return $this->hasMany('App\Models\Imagegallery');

    }



}

