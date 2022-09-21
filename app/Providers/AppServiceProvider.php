<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Informe;
use App\Models\Parraine;
use App\Observers\ArticleObserver;
use App\Observers\InformeObservser;
use App\Observers\ParraineObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
        Article::observe(ArticleObserver::class);
        Informe::observe(InformeObservser::class);
        Parraine::observe(ParraineObserver::class);

    }
}
