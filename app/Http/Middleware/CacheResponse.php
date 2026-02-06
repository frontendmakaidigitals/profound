<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class CacheResponse
{
    protected $ttl;

    public function handle($request, Closure $next, $ttl = 60)
    {
        $this->ttl = $ttl;

        $key = $this->cacheKey($request);

        if (Cache::has($key)) {
            return response(Cache::get($key));
        }

        $response = $next($request);

        Cache::put($key, $response->getContent(), $this->ttl);

        return $response;
    }

    protected function cacheKey($request)
    {
        return md5($request->fullUrl());
    }
}
