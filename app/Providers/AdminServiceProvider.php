<?php

namespace App\Providers;

use Illuminate\Support\Fluent;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerScriptConfig();
    }

    /**
     * Register script global config
     */
    protected function registerScriptConfig()
    {
        $this->app->bind('admin.script.config', function () {
            return new Fluent([
                'format' => [
                    'date' => config('admin.format.date'),
                    'datetime' => config('admin.format.datetime'),
                ],
            ]);
        });
    }
}
