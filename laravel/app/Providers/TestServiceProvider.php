<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestService;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application Services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application Services.
     *
     * @return void
     */
    public function register()
    {
        //每一次都新建一个势力
      /*  $this->app->bind('App\Contracts\TestContract',function(){
            return new TestService();
        });*/


        $this->app->singleton('test',function(){
            return new TestService();
        });
        $this->app->bind('App\Contracts\TestContract','test');
    }
}
