<?php

namespace Ihxnnxs\UmbraUI\Tests;

use Ihxnnxs\UmbraUI\UmbraUIServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            UmbraUIServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('view.paths', [
            __DIR__.'/../resources/views',
            resource_path('views'),
        ]);
    }
}
