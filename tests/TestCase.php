<?php

namespace Mouadziani\LaravelQueryInspector\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Mouadziani\LaravelQueryInspector\LaravelQueryInspectorServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelQueryInspectorServiceProvider::class,
        ];
    }
}
