<?php

namespace Sawirricardo\IndonesiaRegion\Commands;

use Illuminate\Console\Command;

class IndonesiaRegionCommand extends Command
{
    public $signature = 'indonesia-region:seed';

    public $description = 'Seed Indonesia Region';

    public function handle(): int
    {
        $this->comment('All done');
        $this->call('db:seed', ['--class' => 'Sawirricardo\IndonesiaRegion\Database\Seeders\IndonesiaRegionsTableSeeder']);

        return self::SUCCESS;
    }
}
