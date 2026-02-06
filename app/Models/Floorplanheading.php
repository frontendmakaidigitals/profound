<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floorplanheading extends Model
{
    use HasFactory;
   
   protected $table = 'floorplanheadings';
   protected $fillable = [
    'heading',
  ];
  
}
