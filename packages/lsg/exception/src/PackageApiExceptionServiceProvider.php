<?php

namespace Lsg\Exception;

use Illuminate\Support\ServiceProvider;

class PackageApiExceptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        // 单例绑定服务
         $this->app->singleton('apiexception', function ($app) {
             return new ApiException();
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/apiexception.php' => config_path('packagetest.php'), // 发布配置文件到 laravel 的config 下         ]);
    }
}
