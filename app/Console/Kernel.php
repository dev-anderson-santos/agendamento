<?php

namespace App\Console;

use App\Console\Commands\MonitorScheduleCron;
use App\Console\Commands\MonitorScheduleFaturarCron;
use App\Console\Commands\MonitorScheduleMirrorCron;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        MonitorScheduleCron::class,
        MonitorScheduleFaturarCron::class,
        MonitorScheduleMirrorCron::class
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('schedule:shouldfinalize')->twiceDaily(8, 12);
        $schedule->command('schedule:faturar')->monthly();
        $schedule->command('schedule:mirror')->monthlyOn();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
