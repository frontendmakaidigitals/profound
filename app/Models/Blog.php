<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Blog extends Model
{
    protected static function booted()
    {
        static::created(function () {
            Cache::forget('sitemap_xml_content');
        });

        static::updated(function () {
            Cache::forget('sitemap_xml_content');
        });

        static::deleted(function () {
            Cache::forget('sitemap_xml_content');
        });
    }
}