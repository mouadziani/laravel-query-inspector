<?php

namespace Mouadziani\LaravelQueryInspector;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider
 */
class LaravelQueryInspectorServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('toRawSql', function () {
            $builer = $this->getQuery();

            return vsprintf(str_replace(['?'], ['\'%s\''], $builer->toSql()), $builer->getBindings());
        });
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
}
