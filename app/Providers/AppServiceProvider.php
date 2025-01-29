<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        DB::listen(function ($query) {
            \Log::info($query->sql);          // SQL Query
            \Log::info($query->bindings);     // Query Bindings (parameters)
            \Log::info($query->time);         // Query execution time
        });
    }
}
