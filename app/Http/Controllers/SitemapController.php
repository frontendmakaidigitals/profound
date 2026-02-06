<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Property;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index()
    {
        // Use a simple, consistent cache key
        $cacheKey = 'sitemap_xml_content';
        
        if (!Cache::has($cacheKey)) {
            $blogs = Blog::all();
            $properties = Property::all();
            
            $content = view('sitemap', [
                'blogs' => $blogs,
                'properties' => $properties
            ])->render();
            
            Cache::put($cacheKey, $content, 3600); // Cache for 1 hour
        }
        
        $content = Cache::get($cacheKey);

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}