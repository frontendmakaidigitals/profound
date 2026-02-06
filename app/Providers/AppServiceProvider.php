<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\CacheResponse;
use App\Models\Slider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CacheResponse::class);
    }

    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        $banner = null;

        if (Schema::hasTable('sliders')) {
            if (Slider::where('page_url', url()->current())->exists()) {
                $banner = Slider::where('page_url', url()->current())->first();
            }
        }

        View::share('banner', $banner);
    }
}
