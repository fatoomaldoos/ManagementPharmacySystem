<?php

namespace App\Console\Commands;
use App\Console\Commands\MySql;
use Spatie\DbDumper\Databases;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use mysqli;

class BackupDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This backs up the database';

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
        File::put();
        MySql::create()->setDbName(env('DB_DATABASE'))->setUserName(env('DB_USERNAME'))->setPassword(env('DB_PASSWORD'))->setHost(env('DB_HOST'))->setPort(env('DB_PORT'))
        ->dumpToFile(base_path('pharmacyProject.sql'));
        return 0;
    }
}
