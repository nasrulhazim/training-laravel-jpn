<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReloadCacheCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reload:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reload all caches';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:cache');
        $this->call('schedule:clear-cache');
        $this->call('event:clear');
    }
}
