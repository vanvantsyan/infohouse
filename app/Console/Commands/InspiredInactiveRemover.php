<?php

namespace App\Console\Commands;

use App\Models\Estate;
use Carbon\Carbon;
use Illuminate\Console\Command;

class InspiredInactiveRemover extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:inactive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Is removing inactive estates where 3 days passed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Estate::where('created_at', '<', Carbon::now()->subDay(3))->where('status','=',Estate::STATUS_LOCKED)->delete();
    }
}
