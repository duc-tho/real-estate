<?php

namespace App\Console\Commands\Healthcheck;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PDO;

class DatabaseConnectionHealthCheckCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'healthcheck:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check database connection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pdo = null;

        try {
            $pdo = DB::connection()->getPdo();
        } catch (\Exception $e) {
            $this->newLine(2);
            $this->warn("[!] {$e->getMessage()}");
            $this->newLine(2);
            return;
        }

        if (empty($pdo)) {
            $this->newLine(2);
            $this->warn("[!] Can't connect to database!");
            $this->newLine(2);
            return;
        }

        $this->newLine(2);
        $this->info("[Yay] Database connection successful!");
        $this->table(
            ['Attribute', 'Value'],
            [
                ['STATUS', 'Connected to database!'],
                ['CLIENT_VERSION', $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)],
                ['DRIVER_NAME',$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)],
                ['SERVER_VERSION', $pdo->getAttribute(PDO::ATTR_SERVER_VERSION)],
                ['CONNECTION_STATUS', $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS)],
                ['SERVER_INFO', $pdo->getAttribute(PDO::ATTR_SERVER_INFO)]
            ],
        );
        $this->newLine(2);
    }
}
