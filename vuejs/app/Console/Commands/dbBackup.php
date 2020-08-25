<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class dbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Back up your database';
    protected $process;

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
        
        $path = base_path("database".DIRECTORY_SEPARATOR."backup".DIRECTORY_SEPARATOR);
        $filename = "backup-".env("DB_DATABASE")."-".date("Y-m-d", time()).".sql"; // config('database.connection.mysql.database')
        $command = "mysqldump --user=homestead --password=secret".env("DB_PASSWORD")." --host " .env("DB_HOST")." ".env("DB_DATABASE")." > ". $path.$filename;
        exec($command, $output, $returnvar);
        Log::info("Database backup was created succesfully");
    }
}
