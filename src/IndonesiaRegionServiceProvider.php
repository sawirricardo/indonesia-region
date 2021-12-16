<?php

namespace Sawirricardo\IndonesiaRegion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sawirricardo\IndonesiaRegion\Commands\IndonesiaRegionCommand;

class IndonesiaRegionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('indonesia-region')
            ->hasConfigFile()
            ->hasMigration('create_indonesia_region_table')
            ->hasCommand(IndonesiaRegionCommand::class);
    }
}
