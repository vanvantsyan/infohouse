<?php

namespace App\Providers;

use App\Models\News;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
                    ;
        view()->composer('client.layouts.app', function ($view) {
            $news = News::inRandomOrder()->limit(2)->get();

            $view->with(
                ['news' => $news
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
