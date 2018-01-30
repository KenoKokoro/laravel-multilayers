<?php

namespace App\Providers;

use App\DAL\DalServiceProvider;
use App\Modules\ModulesServiceProvider;
use BaseTree\Providers\BaseTreeServiceProvider;
use Illuminate\Support\ServiceProvider;
use RestfulClient\Providers\RestClientServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        $this->app->register(BaseTreeServiceProvider::class);
        $this->app->register(RestClientServiceProvider::class);
        $this->app->register(DalServiceProvider::class);
        $this->app->register(ModulesServiceProvider::class);
    }
}
