<?php

namespace Sawirricardo\IndonesiaRegion\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kalnoy\Nestedset\NestedSetServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\IndonesiaRegion\IndonesiaRegionServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Sawirricardo\\IndonesiaRegion\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NestedSetServiceProvider::class,
            IndonesiaRegionServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__ . '/../database/migrations/create_indonesia_regions_table.php.stub';
        $migration->up();
    }
}
