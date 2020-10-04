<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create database (if exist delete and create)';

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
     * @return void
     */
    public function handle()
    {
        $schema_name = $this->argument('name') ?: config('database.connections.mysql.database');
        $charset = config('database.connections.mysql.charset', 'utf8mb4');
        $collation = config('database.connections.mysql.collation', 'utf8mb4_general_ci');
        config(['database.connections.mysql.database' => null]);

        $query = "DROP DATABASE IF EXISTS $schema_name";
        DB::statement($query);

        $query = "CREATE DATABASE IF NOT EXISTS $schema_name CHARACTER SET $charset COLLATE $collation";
        DB::statement($query);

        echo "Database $schema_name created : successful";

        config(['database.connections.mysql.database' => $schema_name]);
    }
}
