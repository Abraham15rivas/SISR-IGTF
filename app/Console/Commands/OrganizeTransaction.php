<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Traits\OrganizeTransTrait;
use Carbon\Carbon;

class OrganizeTransaction extends Command
{
    use OrganizeTransTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'organize:transaction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Organiza las transacciones del dia';

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
     * @return int
     */
    public function handle()
    {
        // $date = Carbon::now()->format('d/m/Y');
        $date       = '29/12/2017';
        $response   = $this->organize($date);
        return $response;
    }
}
