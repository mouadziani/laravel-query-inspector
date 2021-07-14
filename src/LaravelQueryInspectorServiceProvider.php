<?php

namespace Mouadziani\LaravelQueryInspector;

use Mouadziani\LaravelQueryInspector\Commands\LaravelQueryInspectorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelQueryInspectorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-query-inspector')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-query-inspector_table')
            ->hasCommand(LaravelQueryInspectorCommand::class);
    }
}
