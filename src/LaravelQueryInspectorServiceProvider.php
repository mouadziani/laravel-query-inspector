<?php

namespace Mouadziani\LaravelQueryInspector;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
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
        EloquentBuilder::macro('toRawSql', function () {
            $builer = $this->getQuery();

            return vsprintf(str_replace(['?'], ['\'%s\''], $builer->toSql()), $builer->getBindings());
        });

        QueryBuilder::macro('toRawSql', function () {
            return vsprintf(str_replace(['?'], ['\'%s\''], $this->toSql()), $this->getBindings());
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
