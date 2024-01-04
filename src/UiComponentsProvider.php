<?php

namespace Atin\LaravelUiComponents;

use Illuminate\Support\ServiceProvider;
use Atin\LaravelBreadcrumbs\View\Components\Breadcrumbs;

class UiComponentsProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-ui-components');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-ui-components')
        ], 'laravel-ui-components-views');
    }
}