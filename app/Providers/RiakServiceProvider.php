<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Singletonで登録なので、他の場所から呼ばれた場合でも同一インスタンスが呼ばれる
        $this->app->singleton(Connetion::class,function ($app){
            return new Connection(config('riak'));
        });
    }
}
