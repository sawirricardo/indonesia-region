<?php

namespace Sawirricardo\IndonesiaRegion;

use Sawirricardo\IndonesiaRegion\Commands\IndonesiaRegionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_indonesia_regions_table')
            ->hasCommand(IndonesiaRegionCommand::class);
    }
}
