<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tbl_landing_pages';

    protected $fillable = array ('page_name','page_heading', 'meta_title', 'meta_tag', 'meta_desc', 'page_url','image', 'page_desc');
}
