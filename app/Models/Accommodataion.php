<?php



namespace App\Models;



// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Accommodataion extends Model

{

    // use HasFactory;

    protected $table = 'accommodataions';



    public function properties()

    {

        return $this->belongsToMany('App\Models\Property');

    }

}

