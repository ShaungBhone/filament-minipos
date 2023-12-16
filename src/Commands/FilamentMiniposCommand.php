<?php

namespace ShaungBhone\FilamentMinipos\Commands;

use Illuminate\Console\Command;

class FilamentMiniposCommand extends Command
{
    public $signature = 'filament-minipos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
