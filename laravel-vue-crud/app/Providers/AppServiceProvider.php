<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Item;
use App\Observers\PostObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Item::observe(PostObserver::class);
    }
}
