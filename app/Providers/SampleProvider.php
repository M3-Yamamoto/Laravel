<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class SampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //  app()->bind('test',function()
        // {
        //     return new \App\test("some important key!");
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
