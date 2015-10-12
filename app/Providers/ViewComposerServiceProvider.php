<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeStyle();
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeStyle()
    {
        view()->composer('crm.layouts.master', 'App\Http\Composers\StyleComposer');
        view()->composer('layouts.master', 'App\Http\Composers\StyleComposer');
    }
}
